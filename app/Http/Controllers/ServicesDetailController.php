<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesDetailController extends Controller
{
    public function servicedetails()
    {
        return view('user.pages.servicedetails');
    }
}
