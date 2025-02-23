<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    //
    function index(){
        return view('login');
    }

    function handleSubmit(LoginRequest $request) {
        // $request->validate([
        //     'username' => 'required|alpha',
        //     'password' => 'required'
        // ]);
         return $request;
    }
}
