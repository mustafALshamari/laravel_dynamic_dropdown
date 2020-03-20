<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Registeration;
use Illuminate\Support\Facades\Validator;


class RegisterationController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request,[
            "fullname" => "required",
            'email' => ['required', 'string', 'email', 'max:255', 'unique:registerations'],
            "oblast" => "required",
            "gorod" => "required",
            "raion" => "required"
           
        ]);


        $reg = Registeration::create([
            "fullname"    => $request->fullname,
            "email"  => $request->email,
            "oblast"  => $request->oblast,
            "gorod" => $request->gorod,
            "raion"    => $request->raion 
           
        ]);
        return redirect()->back();

    }
}
