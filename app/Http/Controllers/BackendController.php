<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

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

		$news = News::orderBy('created_at', 'desc')->paginate(5);

		return view('backend.admin_news', ['news' => $news]);
	}

	public function admin_news_new() {

		return view('backend.admin_news_new');
	}

	public function admin_news_new_post(Request $request) {

		$validated = $request->validate([
			'title' => ['required', 'string', 'max:200'],
			'sequence' => ['nullable', 'max:20'],
			'link' => ['nullable', 'max:200'],
			'image' => ['nullable']
		]);		

		if ($request->has('image')) {
			
			$fileextension = $request->file('image')->getClientOriginalExtension();
			$file_name = pathinfo($request->file('image')->getClientOriginalName(), PATHINFO_FILENAME);
			$pictname = md5(time().'_'.$file_name).'.'.$fileextension;

			$manager = new ImageManager(Driver::class);
			
			$image = $manager->read($request->image);
			$image->scaleDown(width: 400)->rotate(-45)->reduceColors(6);
			$image->save(Storage::disk('newspic')->path($pictname));
		}
		else
		{
			$pictname = null;
		}

		$row = News::create([
			'sequence'	=> $request->sequance,
			'pictname' 	=> $pictname,
			'title' 	=> $request->title,
			'text' 		=> $request->text,
			'link' 		=> $request->link,
		]);

		return redirect()->route('admin_news');
	}

	public function admin_news_modify($id = null) {

		if (!$id) return redirect('back');

		dd($id);

		$new = News::get($id);

		return view('backend.admin_midify', ['new' => $new]);
	}

	public function admin_news_modify_post(Request $request, $id = null) {

		if (!$id) return redirect('back');

		dd($id, $request->all());

		$new = News::get($id);

		return redirect()->route('admin_news');
	}

	public function admin_news_delete($id = null) {

		if (!$id) return redirect('back');

		dd($id);

		$new = News::get($id);

		return redirect()->route('admin_news');
	}
}
