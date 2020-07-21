<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class TestController extends Controller
{
    function show() {
    	$data = Post::all();
    	return view('welcome', ['data' => $data]);
    }
}
