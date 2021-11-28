<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProtfolioController extends Controller
{
    public function portfolio()
    {
        return view('user.pages.portfolio');
    }
}
