<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Validator;
use App\User;
use Mail;

class UserAuthController extends Controller
{
    function signUpPage() {
    	return view('auth.userSignup');
    }

    function signUpData() {
    	$rule = [
    		"user_account"=>["required", "max:20"],
    		"user_pw"=>["required", "min:6", "same:user_repw"],
    		"user_repw"=>["required","min:6"],
    		"user_name"=>["required", "max:10"],
    		"user_email"=>["required","email"],
    		"user_type"=>["required", "in:G,A"]
    	];
    	$input = request()->all();
    	$v = Validator::make($input, $rule);
    	if ($v->fails()) {
    		return redirect('/controller/sign-up')
    		->withErrors($v)
    		->withInput();
    	} else {
    		$input["user_pw"] = Hash::make($input["user_pw"]);
    		User::create($input);
    		$subject = "註冊成功";
    		$to = $input["user_email"];
    		Mail::send("email.email", ["user_account"=>$input["user_account"]],
    			function($mail) use($subject, $to){
    				$mail->from(env("MAIL_USERNAME"));
    				$mail->to($to);
    				$mail->subject($subject);
    			}
    		);
    		$success = "T";
    		return view('auth.userSignup',["success"=>$success]);
    	}
    }

    function signIn() {
        if (request()->has("login")) {
            $rule = [
            "account"=>["required", "max:20"],
            "passwd"=>["required", "min:6"],
            ];
            $input = request()->all();
            $v = Validator::make($input, $rule);
            if ($v->fails()) {
                return redirect('/controller/sign-in')
                ->withErrors($v)
                ->withInput();
            } else {
                $user = User::where("user_account",request()->input("account"))->first();
                if ($user != null) {
                    $is_pass = Hash::check(request()->input("passwd"),$user->user_pw);
                    if ($is_pass == true) {
                          session()->put("userID",$user->id);
                          return redirect("/controller/home");
                      }  
                }
            }
            return view('auth.userSignin');
        } else {
            return view('auth.userSignin');
        }
    }
    function signOut() {
        session()->forget("userID");
        return redirect("/controller/home");
    }

}
