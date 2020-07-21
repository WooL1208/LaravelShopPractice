<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//homePage
Route::get('/controller/home', 'HomeController@indexPage');

//signupPage
Route::get('/controller/sign-up', 'UserAuthController@signUpPage');
Route::post('/controller/sign-up', 'UserAuthController@signUpData');

//signin/out
Route::match(["get","post"],'/controller/sign-in', 'UserAuthController@signIn');
Route::get('/controller/sign-out', 'UserAuthController@signOut');

//admin
Route::group(['prefix' => 'controller/admin','middleware' => 'checkType'], function() {
	Route::get('/', 'Admin\AdminController@admin');
	Route::match(["get","post"],'/user-list', 'Admin\AdminController@user_list');
});

//test
Route::get('/controller/test', 'TestController@show');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function() {
	return "yee";
});

Route::match(['get', 'post'],'address/{address}' ,function($address) {
	return 'address = '.$address;
	});

Route::get('/value/{value?}', function($value = '3') {
	return 'value = '.$value;
});

Route::get('/phone/{phone?}', function($phone) {
	return 'phone = '.$phone;
})-> where ('phone', '[0-9]{10}');

Route::group(['prefix' => 'user'], function() {

	Route::get('name', function() {
	return 'name';
	});

	Route::get('phone', function() {
	return 'phone';
	});
});