<?php
/**
 * Created by PhpStorm.
 * User: Bielecki
 * Date: 9/17/2016
 * Time: 8:21 AM
 */

namespace maldenll\Http\ViewComposers;

use Illuminate\View\View;

class MainComposer
{
    public function compose(View $view)
    {
        $news =  \maldenll\News::getNews(5);
        $leagues = \maldenll\League::orderBy('level')->get();
        $view->with('news', $news)->with('leagues',$leagues);
    }
}