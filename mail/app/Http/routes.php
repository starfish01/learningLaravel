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

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


Route::get('/mail', function (){

    $data = [
      'title'=> 'hi, from email client',
      'content'=>'This is part of a a Laravel course'
    ];

    Mail::send('emails.test', $data, function ($message){
        $message->to('patrick.labes@gmail.com')->subject('hello student how are you?');
    });

    return redirect('/');

});
