<?php

namespace App\Http\Controllers;

use App\Models\News;

class PageController extends Controller
{
    public function start()
    {
        return inertia('Start');
    }

    public function news()
    {
        //$news = News::all();
        $news = News::latest()->paginate(3);

        // dd($news);

        return inertia('News', [
            'news' => $news,
        ]);
    }

    public function music()
    {
        return inertia('Music');
    }

    public function code()
    {
        return inertia('Code');
    }
}
