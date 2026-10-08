<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreatsController extends Controller
{
    public function threats(string $ip){
        return view('threats', ['ip' => $ip]);
    }
}
