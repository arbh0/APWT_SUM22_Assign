<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class LoginController extends Controller
{
    function registerSubmit(Request $req){
        $this->validate($req,
            [
                "name"=>"required|regex:/^[A-Z a-z,.-]+$/i",
                "email"=>"required|email",
                "type"=>"required",
                "password"=>"required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@$#%]).*$/",
                "conf_password"=>"required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@$#%]).*$/|same:password"
            ],
            [
                "conf_password.required"=>"The confirm password field is required.",
                "conf_password.min:8"=>"The password must be at least 8 characters.",
                "conf_password.same:password"=>"The confirm password and password must match.",
            ]
        );
            
            $us = new user();
            $us ->name = $req->name;
            $us ->type = $req->type;
            $us ->password = $req->password;
            $us ->email = $req->email;
            $us ->save();

            return redirect()->route('user.login');
    }

    function loginSubmit(Request $req){
        $this->validate($req,
            [
                "email"=>"required|email",
                "password"=>"required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@$#%]).*$/"
            ]);

            $us=user::where('email','=',$req->email)->first();
            if($us==null){
                return "Email is not found!!";
            }
            elseif($us->type!=$req->type){
                return "User type is invalid!!";
            }
            elseif($us->password!=$req->password){
                return "Wrong Password";
            }
            else{
                if($us->type=="Admin"){

                    return redirect()->route('interface.dashboardadmin');
                }
                if($us->type=="User"){

                    return redirect()->route('interface.dashboard');
                }
            }
            
    }
}
