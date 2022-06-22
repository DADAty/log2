<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logCotroller extends Controller
{
    public function login(){
        /** retour a la vue login */
        return view('login');
    }
    public function auth(Request $request, User $user){
        /** Validation des donnees enregistrer */
        //validation des requete de type mail
        $request-> validate([
            'email' => 'required|email',
            'password' => 'required'

        ]);
        /**Le modele ou vou voler faire un login */
        Auth::login($user);
        /**les champ dans la base */
        $credentials=$request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }
        return redirect()->back()->withErrors('Password invalid or Email');



    }
    public function logout(){
      
        Auth::logout();
        return redirect()->route('login');

    }
    public function dashboard(){
        //La bue dashoard appeler par le auth
        return view('dashboard');
    }
}
