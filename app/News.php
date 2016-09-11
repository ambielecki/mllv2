<?php

namespace maldenll;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public static function getNews($items)
    {
        $newsItems = News::orderBy('id', 'desc')->take($items)->get();
        return $newsItems;
    }

    public static function addNews($request)
    {
        $newsItem = new News();
        $newsItem->title = $request->input('title');
        $newsItem->text = $request->input('text');
        if($request->input('important')) {
            $newsItem->important = TRUE;
        } else {
            $newsItem->important = FALSE;
        }
        $newsItem->save();
    }
}
