<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;

class AbuseIpdbService
{
    public function checkIp(string $ip): array
    {
        try {
            $response = Http::timeout(10)->withHeaders([
                'Key' => config('services.abuseipdb.key'),
                'Accept' => 'application/json'
            ])->get(
                'https://api.abuseipdb.com/api/v2/check',
                [
                    'ipAddress' => $ip,
                ]
            );

            if (!$response->successful()) {
                throw new \RuntimeException('Errore nella richiesta ad AbuseIPDB.');
            }

            return $response->json();

        } catch (ConnectionException $e) {
            throw new \RuntimeException(
                'Abuse IPDB non è al momento raggiungibile',
                0,
                $e
            );
        }
    }
}
