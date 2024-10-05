<?php

namespace App\Http\Controllers;

use App\Models\News;

class PageController extends Controller
{
    public function news()
    {
        //$news = News::all();
        $news = News::latest()->paginate(3);

        $teszt = 'kiskacsa';

        // dd($news);

        return inertia('News', ['news' => $news, 'teszt' => $teszt]);
    }

    public function about()
    {
        return inertia('About');
    }
}
