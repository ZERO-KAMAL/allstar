<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function ourcompany(){

        return view('user.pages.ourcompany');
    }
}
