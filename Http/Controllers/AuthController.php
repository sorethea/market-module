<?php

namespace Modules\Market\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    public function login(){
        return view('market::auth.login')->with(["action"=>"login"]);
    }

    public function register(){
        return view('market::auth.register')->with(["action"=>"register"]);
    }
    public function logout(){
        \Auth::logout();
        return redirect('/market');
    }
}
