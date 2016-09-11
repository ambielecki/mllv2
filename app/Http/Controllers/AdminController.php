<?php

namespace maldenll\Http\Controllers;

use Illuminate\Http\Request;

use maldenll\News;
use maldenll\Http\Requests\NewsRequest;
use maldenll\Http\Requests;

class AdminController extends Controller
{
    public function getAddNews()
    {
        return view('admin.addNews');
    }

    public function postAddNews(NewsRequest $request)
    {
        News::addNews($request);
        \Session::flash('flash_message', 'Your news item has been added');
        return redirect('/admin/addnews');
    }
}
