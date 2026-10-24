<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThreatLookupRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class ThreatsController extends Controller
{
    public function threats(ThreatLookupRequest $request)
    {
        $ip = $request->validated('ip');
        $user = Auth::user();

        if (!$user) {
            abort(401);
        }

        $user->threatLookups()->create([
            'ip_address' => $ip,
        ]);

        return view('threats', ['ip' => $ip]);

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

        $lookup = $user->threatLookups()
            ->where('ip_address', $ip)
            ->first();

        Log::error("Record non trovato per l'utente: " . $user->name, ['user_id' => $user->id]);

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
