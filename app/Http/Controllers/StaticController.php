<?php

namespace maldenll\Http\Controllers;

use Illuminate\Http\Request;

use maldenll\News;

class StaticController extends Controller
{

    public function getHome()
    {
        return view('home.home');
    }

    public function getRegister()
    {
        return view('static.register');
    }

    public function getAbout()
    {
        return view('static.about');
    }
}
