<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class UserController extends Controller
{
    
    function dashboard(){
        return view("interface.dashboard");
    }
    function userlist(){
        $users = user::where('type','=','User')->get();
        return view("interface.userlist")->with('users',$users);
    }
    function userdetails($id){
        $us = user::where('id','=',$id)->first();
        return view('interface.userdetails')->with('us',$us);
    }
    function dashboardadmin(){
        return view("interface.dashboardadmin");
    }
    function alluserlist(){
        $users = user::all();
        return view("interface.alluserlist")->with('users',$users);
    }
    function alluserdetails($id){
        $us = user::where('id','=',$id)->first();
        return view('interface.alluserdetails')->with('us',$us);
    }
}
