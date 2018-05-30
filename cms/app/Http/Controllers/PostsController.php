<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //this works
       //$posts = Post::findOrFail(1);

        $posts = Post::all();
        
        return view('posts.index', compact('posts'));

        //return "The information being passed is";

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        //return $request->all();

        //return $request->get('title');

        //return $request->title;

        Post::create($request->all());

        return redirect('/posts');

//        $input = $request->all();
//
//        $input['title'] = $request->title;
//
//        Post::create($request->all());

//        $post = new Post;
//
//        $post->title = $request->title;
//
//        $post->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        return "this is the show message";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function contact(){

        $people = ['bob','james','barry'];


        return view('contact', compact('people'));

    }


    public function show_post($id, $name){
        //return view('post')->with('id',$id);

        return view('post', compact('id', 'name'));

    }

}
