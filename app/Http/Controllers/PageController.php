<?php

namespace App\Http\Controllers;

use App\Models\News;

class PageController extends Controller
{
    public function start()
    {
        return inertia('Start', [
            'pagename' => 'start',
        ]);
    }

    public function news()
    {
        $news = News::latest()->paginate(3);

        // dd($news);

        return inertia('News', [
            'pagename' => 'news',
            'news' => $news,
        ]);
    }

    public function music()
    {
        return inertia('Music', [
            'pagename' => 'music',
        ]);
    }

    public function code()
    {
        return inertia('Code', [
            'pagename' => 'code',
        ]);
    }
}
