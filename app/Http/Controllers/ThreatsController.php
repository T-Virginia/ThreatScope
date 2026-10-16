<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThreatLookupRequest;
use App\Models\ThreatLookup;
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

    public function showApi(string $ip)
    {
        $user = Auth::user();

        $lookup = $user->threatLookups()
            ->where('ip_address', $ip)
            ->first();

        if (!$lookup) {
            return response()->json([
            'success' => false,
            'message' => 'Risorsa non trovata o richiesta non valida.'
        ], 404);
        } else {
            return response()->json([
                'success' => true,
                'message' => 'Ip trovato.',
                'data' => [
                    'id' => $lookup->id,
                    'ip_address' => $lookup->ip_address,
                ]
            ]);
        }
    }
}
