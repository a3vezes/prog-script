<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login() {
        return view('login');
    }
    public function logar(Request $request){
        $request->validate([
            'email' => 'email|required',
            'senha' => 'required'
        ]);
        if($request->email == "admin@admin.com" && $request->senha == "admin"){
            return redirect()->route('admin');
        }else
        return redirect()->back();
    }
}
