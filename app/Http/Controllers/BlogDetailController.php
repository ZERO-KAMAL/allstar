<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogDetailController extends Controller
{
    public function blogdetails(){

        return view('user.pages.blogdetails');
    }
}
