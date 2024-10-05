<?php

namespace App\Http\Controllers;

use App\Models\News;

class PageController extends Controller
{
    public function news()
    {
        $news = News::all();

        return inertia('Home', ['news' => $news]);
    }

    public function about()
    {
        return inertia('About');
    }
}
