<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logCotroller extends Controller
{
    public function login(){
        return veiws('login');
    }
    public function auth(){

    }
    public function logout(){

    }
    public function dashboard(){

        return views('dashboard');
    }
}
