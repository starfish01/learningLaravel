<?php

use App\User;
use App\Address;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert', function (){

    $user = User::findOrFail(1);

    $address = new Address(['name'=>'123 fake st NY 4210']);

    $user->address()->save($address);

});

Route::get('/update', function (){

    $address = Address::whereUserId('1')->first();

    $address-> name = "Update Road GC 1234";

    $address->save();

});

Route::get('/read', function (){

    $user = User::findOrFail(1);

    echo $user->address->name;

});

Route::get('delete', function (){

    $user = User::findOrFail(1);

    $user->address()->delete();

    return "done";

});




