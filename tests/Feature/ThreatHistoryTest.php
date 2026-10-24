<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\ThreatLookup;
use Tests\TestCase;
use App\Services\AbuseIpdbService;

class ThreatHistoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_cannot_access_threat_history(): void
    {
        $response = $this->get('/history');

        $response->assertRedirect('/login');
    }


    public function test_authenticated_user_can_access_threat_history(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/history');

        $response->assertStatus(200);
    }


    public function test_user_sees_only_their_own_threat_history(): void
    {
        $user1 = User::factory()->create();
        $user2 = User::factory()->create();

        $user1->threatLookups()->create([
            'ip_address' => '1.1.1.1',
        ]);

        $user2->threatLookups()->create([
            'ip_address' => '8.8.8.8',
        ]);

        $response = $this->actingAs($user1)->get('/history');

        $response->assertOk();
        $response->assertSee('1.1.1.1');
        $response->assertDontSee('8.8.8.8');
    }

    public function test_invalid_ip_is_rejected(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->get('/threats/ciao');

        $response->assertSessionHasErrors('ip');
    }


    public function test_valid_ip_uses_abuseipdb_service(): void
    {
        $user = User::factory()->create();

        $this->mock(AbuseIpdbService::class, function ($mock) {
            $mock->shouldReceive('checkIp')
                ->once()
                ->with('8.8.8.8')
                ->andReturn([
                    'data' => [
                        'ipAddress' => '8.8.8.8',
                        'abuseConfidenceScore' => 0,
                        'totalReports' => 0,
                        'countryCode' => 'US',
                        'isp' => 'Example ISP',
                    ],
                ]);
        });

        $response = $this->actingAs($user)->get('/threats/8.8.8.8');

        $response->assertOk();
    }


}
