<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\News;

class BackendController extends Controller
{
	public function changelang(Request $request) {

		$lang = $request->lang;
		$validLanguages = ['en', 'hu'];

		if (!in_array($lang, $validLanguages))
			return back();

		app()->setLocale($lang);

		$cookie = cookie('selected_language', $lang, 60 * 24 * 7);	// 1 hét

		return back()->withCookie($cookie);
	}

	public function admin_index() {

		return view('backend.admin_index');
	}

	public function admin_user() {

		return view('backend.admin_user');
	}

	public function admin_news() {

		$news = News::all();

		return view('backend.admin_news', ['news' => $news]);
	}

}
