<?php

use App\Photo;
use App\Post;
use App\Tag;
use App\User;
use App\Country;
use Carbon\Carbon;

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

//Route::get('/insert',function(){
//
//    DB::insert('insert into posts(title, content) values(?,?)', ['PHP With Laravel','PHP Laravel is the best thing thats happened to PHP']);
//
//});

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



//Route::get('/findwhere', function (){
//   $posts = Post::where('id', 2)->orderBy('id','desc')->take(1)->get();
//
//   return $posts;
//
//});

//Route::get('/findmore',function (){
//
//    $posts = Post::findOrFail(1);
//    return $posts;
//
//    //$posts = Post::where('users_count', '<', 50)->firstOrFail();
//
//});

//Route::get('/basicinsert', function (){
//    $post = new Post;
//
//    $post->title = 'new ORM title';
//    $post->content = 'wow eloquent is really cool, look at this';
//
//    $post->save();
//
//});


//Route::get('/basicupdate', function (){
//    $post = Post::find(2);
//
//    $post->title = 'new ORM title 3';
//    $post->content = 'wow eloquent is really cool, look at this2';
//
//    $post->save();
//
//});

//Route::get('/create', function (){
//    Post::create(['title'=>'the create method','content'=>'WOW im learning alot']);
//});

//
//Route::get('/update', function (){
//    Post::where('id', 2)->where('is_admin',0)->update(['title'=>'new PHP title', 'content'=>'CHANGING with update']);
//});

//Route::get('/delete', function (){
//    $post = Post::find(2);
//    $post->delete();
//});

//Route::get('/delete2', function(){
//    Post::destroy([4,5]);
//
//});

//Route::get('/softdelete', function(){
//
//    Post::find(3)->delete();
//
//});


//Route::get('/readsoftdelete', function(){
////
////    $post = Post::withTrashed()->where('id',3)->get();
////
////    return $post;
////
////});

//Route::get('/restore', function (){
//
//    Post::withTrashed()->where('is_admin',0)->restore();
//
//});

//Route::get('/forcedelete', function (){
//
//    //Post::withTrashed()->where('is_admin',0)->forcedelete();
//
//    Post::withTrashed()->where('id',4)->forcedelete();
//
//});


//----------------------------------------------------------Eloquent Relationships


//One to One
//
//Route::get('/user/{id}/post', function ($id){
//
//    //return User::find($id)->post;
//
//    return User::find($id)->post->title;
//
//});
//
//
//// The inverse
//Route::get('/post/{id}/user', function ($id){
//
//    return Post::find($id)->user->name;
//
//});
//
//// One to Many
//Route::get('/posts', function (){
//
//
//    $user = User::find(1);
//
//    foreach($user->posts as $post){
//      echo  $post->title . "<br>";
//    }
//
//});
//
//
/////Many to many
/////
//
//Route::get('/user/{id}/role', function ($id){
//
//
////    $user = User::find($id)->roles()->orderBy('id','desc')->get();
////    return $user;
//
//    $user = User::find($id);
//
//    if($user == null){
//        return 'No User Found';
//    }
//
//
//
//    foreach ($user->roles as $role) {
//
//        return $role->name;
//
//    }
//
//});
//
//
////Accessing the intermediate table /pivot
//
//Route::get('/user/pivot', function (){
//
//    $user = User::find(1);
//
//    foreach ($user->roles as $role){
//        echo $role->pivot;
//    }
//
//});
//
//Route::get('/user/country',function (){
//
//   $country = Country::find(1);
//
//    foreach ($country->posts as $post) {
//
//        return $post->title;
//
//    }
//
//});
//
//
//// polymoorphic Relations
//
//Route::get('user/photos', function (){
//    $user= User::find(1);
//
//    foreach ($user->photos as $photo){
//        return $photo->path;
//    }
//
//});
//
//Route::get('post/{id}/photos', function ($id){
//    $post= Post::find($id);
//
//    foreach ($post->photos as $photo){
//        echo $post->path . "<br>";
//    }
//
//});
//
//Route::get('photo/{id}/post', function ($id){
//
//    $photo = Photo::findOrFail($id);
//
//    return $photo->imageable;
//
//});
//
////Polymorphic many to many
//
//
//Route::get('post/tag',function (){
//    $post = Post::find(1);
//
//    foreach ($post->tags as $tag){
//        echo $tag->name . "<br>";
//    }
//
//});
//
//Route::get('/tag/post/', function (){
//
//    $tag = Tag::find(2);
//
//    foreach ($tag->posts as $post){
//        echo $post->title;
//    }
//
//
//});


///------------------------------------------------------------------------
/// Crud application
/// -----------------------------------------------------------------------
///


Route::group(['middlewareGroups' => 'web'], function () {
    Route::resource('/posts', 'PostsController');

    Route::get('/dates', function (){
        $date = new DateTime('+1 week');
        echo $date->format('d-m-y');

        echo '<br>';

        echo Carbon::now()->addDays(4)->diffForHumans();

        echo '<br>';

        echo Carbon::now()->subMonths(4)->diffForHumans();

    });


    Route::get('/getname', function (){
        $user = User::findOrFail(1);
        echo $user->name;
    });

    Route::get('/setname', function (){
        $user = User::findOrFail(1);
        $user->name = 'beck';
        $user->save();
    });

});















