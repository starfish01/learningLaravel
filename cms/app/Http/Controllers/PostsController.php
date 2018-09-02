<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
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

        //$posts = Post::all();

        //$posts = Post::latest()->get();

        //longer way of doing abover
        $posts = Post::orderBy('id','desc')->get();

        //wont call query scope ? its been literally months so im not sure if its an issue on my end with a mistake a did setting it up
        //$posts = Post::latest()->get();

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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {

//        $this->validate($request, [
//            'title'=>'required|max:10|min:2'
//        ]);

        $input = $request->all();

        if($file = $request->file('file')){
            $name = $file->getClientOriginalName();
            $file->move('images', $name);
            $input['path']= $name;
        }

        Post::create($input);







        //grabs files
//        $file = $request->file('file');
//
//        echo "<br>";
//
//        echo $file->getClientOriginalName();

      // Post::create($request->all());
//
      //return redirect('/posts');


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //


        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //


        $post = Post::findOrFail($id);

        $post->update($request->all());


        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        Post::whereId($id)->delete();


        return redirect('/posts');
    }

    public function contact()
    {

        $people = ['bob', 'james', 'barry'];


        return view('contact', compact('people'));

    }


    public function show_post($id, $name)
    {
        //return view('post')->with('id',$id);

        return view('post', compact('id', 'name'));

    }

}
