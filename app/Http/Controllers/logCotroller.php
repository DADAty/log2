<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logCotroller extends Controller
{
    public function login(){
        return view('login');
    }
    public function auth(Request $request){
        //validation des requete de type mail
        $request-> validate([
            'email' => 'required|email',
            'password' => 'required'

        ]);
        if (auth()->attempt($request->only('email','password'))){
            return redirect()->route('dashboard');
        }
        return redirect()->back()->withErrors('biby');



    }
    public function logout(){

    }
    public function dashboard(){

        return view('dashboard');
    }
}
