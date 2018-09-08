<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //$request->session(['edwin'=>'master instructor']);

       // echo $request->session()->get('edwin');

//        //non global
//        $request->session()->put(['edwin'=>'master instructor']);
//        return $request->session()->get('edwin');

//        //global session
//        session(['edwin'=>'your teacher']);
//        return session('edwin');

        //forgets session
//        $request->session()->forget('edwin');

        //cleans out all sessions
        //$request->session()->flush();

        //shows sessions currently active
        //return $request->session()->all();


        //only displays the data for one session
        //$request->session()->flash('message','post has been create');
        //return $request->session()->get('message');

        //re session
        //$request->session()->reflash();
        //keep specific session
        //$request->session()->keep('message');





        return view('home');
    }
}
