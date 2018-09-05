<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');

    //checks if the user is logged in
//    if(Auth::check()){
//        return "the user is logged in";
//    }

//    $username='';
//    $password='';
//
//    if(Auth::attempt(['username'=>$username, 'password'=>$password])){
//        return redirect()->intended('/home');
//    }

    //Auth::logout();

});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/logout1', function (){

    Auth::logout();
    return view('auth/login');

});

Route::get('/querylogin', function (){

    if($user = Auth::user()){
        return "true";
    }else
        return "false";

});
