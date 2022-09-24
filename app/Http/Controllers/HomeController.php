<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front_end.index');
    }

    public function members()
    {
        return view('front_end.members');
    }
}
