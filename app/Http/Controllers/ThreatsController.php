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
}
