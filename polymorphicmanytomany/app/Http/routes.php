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

use App\Post;
use App\tag;
use App\Video;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/create', function (){

    $post = Post::create(['name'=>'helloworld']);

    $tag1 = Tag::find(1);

    $post->tags()->save($tag1);

    $video = Video::create(['name'=>'video.mkv']);

    $tag2 = Tag::find(2);

    $video->tags()->save($tag2);

});


Route::get('/read', function (){

    $post = Post::findOrFail(3);


    foreach ($post->tags as $tag){

        echo $tag;

    }


});


