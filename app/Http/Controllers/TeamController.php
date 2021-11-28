<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function ourteam()
    {
        return view('user.pages.ourteam');
    }
}
