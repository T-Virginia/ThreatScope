<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThreatLookupRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Services\AbuseIpdbService;
use Throwable;

class ThreatsController extends Controller
{
    public function threats(ThreatLookupRequest $request, AbuseIpdbService $abuseIpdb)
    {
        $ip = $request->validated('ip');

        try {
            $risultato = $abuseIpdb->checkIp($ip);
        } catch (\RuntimeException $e) {
            return response()->view('errors.abuseipdb', [], 502);
        }

        $user = Auth::user();

        if (!$user) {
            abort(401);
        }

        $user->threatLookups()->create([
            'ip_address' => $ip,
            'abuse_confidence_score' => $risultato['data']['abuseConfidenceScore'] ?? null,
            'total_reports' => $risultato['data']['totalReports'] ?? null,
            'country_code' => $risultato['data']['countryCode'] ?? null,
            'isp' => $risultato['data']['isp'] ?? null,
        ]);

        return view(
            'threats',
            [
            'ip' => $ip,
            'risultato' => $risultato
            ]
        );

    }

    public function history()
    {
        $records = Auth::user()
            ->threatLookups()
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();

        return view('threats-history', ['records' => $records]);
    }

    public function showApi(ThreatLookupRequest $request)
    {
        $user = request()->user();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Non autenticato.',
            ], 401);
        }

        $ip = $request->validated('ip');

        try {
            $lookup = $user->threatLookups()
                ->where('ip_address', $ip)
                ->first();
        } catch (Throwable $e) {

            Log::error("Errore durante la ricerca", ['ip' => $ip, 'exception' => $e->getMessage()]);

            return response()->json([
            'success' => false,
            'message' => 'Servizio non disponibile.',
            ], 500);
        }

        if (!$lookup) {
            return response()->json([
                'success' => false,
                'message' => 'Risorsa non trovata.',
            ], 404);
        }

        Log::info("Record trovato per l'utente: " . $user->name, ['user_id' => $user->id]);

        return response()->json([
            'success' => true,
            'message' => 'IP trovato.',
            'data' => [
                'id' => $lookup->id,
                'ip_address' => $lookup->ip_address,
            ],
        ]);
    }
}
