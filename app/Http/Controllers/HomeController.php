<?php

namespace maldenll\Http\Controllers;

use Illuminate\Http\Request;

use maldenll\Http\Requests;
use maldenll\News;

class HomeController extends Controller
{

    public function getHome()
    {
        return view('home.home', ['data'=>$this->data]);
    }
}
