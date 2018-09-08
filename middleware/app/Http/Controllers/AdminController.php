<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('IsAdmin');
    }

    public function index(){
        return 'you are an admin if you see this page';
    }


}