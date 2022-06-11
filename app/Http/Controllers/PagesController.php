<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home(){
        return view("home");
    }
    function register(){
        return view("user.register");
    }
    function login(){
        return view("user.login"); 
    }
}
