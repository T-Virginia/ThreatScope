<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThreatLookupRequest;
use App\Models\ThreatLookup;
use Illuminate\Support\Facades\Validator;

class ThreatsController extends Controller
{

public function threats(ThreatLookupRequest $request)
    {
    
    $ip = $request->validated('ip');

    $nuovoIp = new ThreatLookup();
    $nuovoIp->ip_address = $ip;
    $nuovoIp->save();

    return view('threats', ['ip' => $ip]);


    }
}
