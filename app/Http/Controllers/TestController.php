<?php

namespace maldenll\Http\Controllers;

use Illuminate\Http\Request;

use maldenll\Http\Requests;
use maldenll\News;

class TestController extends Controller
{
    public function getTest()
    {
        $leagues = \maldenll\League::orderBy('level')->get();
        dump($leagues->toArray());
    }
}
