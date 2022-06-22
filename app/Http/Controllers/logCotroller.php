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



    }
    public function logout(){

    }
    public function dashboard(){

        return views('dashboard');
    }
}
