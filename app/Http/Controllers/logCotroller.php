<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logCotroller extends Controller
{
    public function login(){
        return view('login');
    }
    public function auth(Request $request, User $user){
        //validation des requete de type mail
        $request-> validate([
            'email' => 'required|email',
            'password' => 'required'

        ]);
        Auth::login($user);
        $credentials=$request->only('email', 'password');

        if (Auth::attempt($credentials)) {
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
