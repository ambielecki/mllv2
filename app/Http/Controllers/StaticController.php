<?php

namespace maldenll\Http\Controllers;

use Illuminate\Http\Request;

use maldenll\News;

class StaticController extends Controller
{

    public function getHome()
    {
        return view('home.home', ['data'=>$this->data]);
    }

    public function getRegister()
    {
        return view('static.register', ['data'=>$this->data]);
    }

    public function getAbout()
    {
        return view('static.about', ['data'=>$this->data]);
    }
}
