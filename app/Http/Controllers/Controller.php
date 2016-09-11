<?php

namespace maldenll\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use maldenll\News;

class Controller extends BaseController
{
    public $data = [];

    public function __construct()
    {
        $news = News::getNews(5); //get news for newsfeed in all controllers
        $this->data['news'] = $news;
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
