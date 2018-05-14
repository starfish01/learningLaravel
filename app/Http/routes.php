<?php

use App\Post;

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

//Route::get('/', function () {
//    return view('welcome');
////return "sup";
//
//
//
//});

//Route::get('/about', function () {
////    return "about Page";
////});
////
////Route::get('/contact', function () {
////    return "contact page";
////});
////
////Route::get('/post/{id}/{name}', function($id, $name){
////   return  "this is post number " . $id . " " . $name;
////});
////
////Route::get('admin/posts/example', array('as'=>'admin.home' , function(){
////    $url = route('admin.home');
////
////    return "this url is " . $url;
////}));
///
///

//Route::get('/post/{id}','PostsController@index');

//Route::resource('posts','PostsController');
//Route::get('/contact','PostsController@contact');
//
//Route::get('post/{id}/{name}','PostsController@show_post');

//-------------------------------------------------------------DataBase Queries

//-----------------------------------------------------------Application Routes

Route::get('/insert',function(){

    DB::insert('insert into posts(title, content) values(?,?)', ['PHP With Laravel','PHP Laravel is the best thing thats happened to PHP']);

});

//Route::get('/read',function(){
//
//    $results = DB::select('select * from posts where id=?',[1]);
//
//    foreach ($results as $post){
//        return $post->title;
//    }
//
//});
//
//
//Route::get('/update', function (){
//
//    $updated = DB::update('update posts set title = "updated title" where id =?', [1]);
//
//    return $updated;
//
//});
//
//Route::get('/delete', function(){
//   $deleted = DB::delete('delete from posts where id=?', [1]);
//
//   return $deleted;
//});


//////-----------------------------Eloquent
///
///


//Route::get('/find',function (){
//    $posts = Post::all();
//
//    foreach ($posts as $post){
//       return $post->title;
//    }
//
//});
//
//
//Route::get('/find1', function (){
//    $post = Post::find(2);
//    return $post->title;
//});



Route::get('/findwhere', function (){
   $posts = Post::where('id', 2)->orderBy('id','desc')->take(1)->get();

   return $posts;

});
