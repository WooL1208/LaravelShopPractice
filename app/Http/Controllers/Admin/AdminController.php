<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AdminController extends Controller
{
    function admin() {
    	$user = User::where("id",session("userID"))->first();
    	return view('admin.admin', compact('user'));
    }

    function user_list() {
    	if (request()->has("save")) {
    		$key = key(request()->input("save"));
    		User::where("id",$key)
    			->update([
    				"user_name" => request()->input("edit_user_name")
    			]);
    	}
    	if (request()->has("delete")) {
    		$key = key(request()->input("delete"));
    		User::where("id",$key)
    			->delete();
    	}
    	if (request()->has("multi_delete")) {
    		$arr = request()->input("select");
    		User::destroy($arr);
    	}
    	$user = User::paginate(10);
    	return view('admin.user_list', compact('user'));
    }
}
