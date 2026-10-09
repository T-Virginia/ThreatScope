<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

class ThreatsController extends Controller
{
    public function threats($ip){

        $data = ['ip' => $ip];

        $rules = ['ip' => 'required|ip'];

        $messages = ['ip.ip' => 'Deve essere un ip valido'];

        $validator = Validator::make($data, $rules, $messages);

        if($validator->fails()){
              return response()->json($validator->errors(), 400);
        } else {

            return view('threats', ['ip' => $ip]);
        }

    }
}
