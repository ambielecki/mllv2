<?php

namespace maldenll\Http\Controllers;

use Illuminate\Http\Request;

use maldenll\Http\Requests;
use maldenll\News;

class TestController extends Controller
{
    public function getTest()
    {
        $news = new News();
        $news->title = "Test Title";
        $news->text = "<p>Check out this newer item with a link! <a href='maldenlittleleague.org'>Vist our old site!</a></p>";
        $news->important = FALSE;
        $news->save();

        \Session::flash('flash_message', 'News Item Added');
        return redirect('/');
    }
}
