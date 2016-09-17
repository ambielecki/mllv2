<?php

/**
 * Created by PhpStorm.
 * User: Bielecki
 * Date: 9/15/2016
 * Time: 6:06 PM
 */
namespace maldenll\Http\ViewComposers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class MainComposerServiceProvider extends  ServiceProvider
{
    //make $news available to all views
    public function boot()
    {
        \View::composer('layouts.master','maldenll\Http\ViewComposers\MainComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}