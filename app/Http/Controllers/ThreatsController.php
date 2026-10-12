<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThreatLookupRequest;
use Illuminate\Support\Facades\Validator;

class ThreatsController extends Controller
{

public function threats(ThreatLookupRequest $request)
    {
    
    $ip = $request->validated('ip');

    return view('threats', ['ip' => $ip]);
    
    }
}
