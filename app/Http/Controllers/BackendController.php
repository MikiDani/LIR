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
	private function imageupload($image) {
		if (!$image) return false;
			
		$fileextension = $image->getClientOriginalExtension();
		$file_name = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
		$pictname = md5(time().'_'.$file_name).'.'.$fileextension;
	
		$manager = new ImageManager(Driver::class);
		
		$imageInstance = $manager->read($image);
		$imageInstance->scaleDown(width: 400);
		
		$imageInstance->save(Storage::disk('newspic')->path($pictname));
	
		return $pictname;
	}

	private function deleteimage($model, $disk) {
		if (!$disk || !$model) return false;

		if ($model->pictname != null && Storage::disk($disk)->exists($model->pictname)) {
			Storage::disk($disk)->delete($model->pictname);
			$model->pictname = null;
			$model->save();
	
			return true;
		}

		return false;
	}

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

		$news = News::orderBy('date', 'desc')->paginate(5);

		return view('backend.admin_news', ['news' => $news]);
	}

	public function admin_news_new() {

		return view('backend.admin_news_new');
	}

	public function admin_news_new_post(Request $request) {

		$validated = $request->validate([
			'date' => ['required', 'date'],
			'sequence' => ['nullable', 'max:20'],
			'title' => ['required', 'string', 'max:500'],
			'text' => ['required', 'string'],
			'link' => ['nullable', 'max:250'],
			'image' => ['nullable', 'mimes:jpg,png'],
		]);

		$pictname = ($request->has('image')) ? $this->imageupload($request->image) : null;
		
		$row = News::create([
			'date' 		=> $request->date,
			'sequence'	=> $request->sequance,
			'pictname' 	=> $pictname,
			'title' 	=> $request->title,
			'text' 		=> $request->text,
			'link' 		=> $request->link,
		]);

		return redirect()->route('admin_news');
	}

	public function admin_news_modify($id = null) {

		if (!$id) return back();

		$new = News::find($id);

		return view('backend.admin_news_modify', ['new' => $new]);
	}

	public function admin_news_modify_post(Request $request, $id = null) {
		if (!$id) return back();
	
		$validated = $request->validate([
			'date' => ['required', 'date'],
			'sequence' => ['nullable', 'max:20'],
			'title' => ['required', 'string', 'max:500'],
			'text' => ['required', 'string'],
			'link' => ['nullable', 'max:250'],
			'image' => ['nullable', 'mimes:jpg,png'],
		]);
		
		$new = News::find($id);
	
		if (!$new) {
			return back()->withErrors(['error' => 'A hír nem található.']);
		}

		$pictname = ($request->imagename)
    		? $request->imagename
    		: (($request->has('image')) ? $this->imageupload($request->image) : null);

		$new->date = $validated['date'];
		$new->sequence = $validated['sequence'] ?? $new->sequence;
		$new->title = $validated['title'];
		$new->text = $validated['text'];
		$new->pictname = $pictname;
		$new->link = $validated['link'] ?? $new->link;
	
		$new->save();
	
		return redirect()->route('admin_news_modify', ['id' => $id])->with('message', 'A hír sikeresen frissítve.');
	}

	public function admin_news_delete($id = null) {

		if (!$id) return back();
    
		$new = News::find($id);

		if (!$new) {
			return back()->with('message', 'News item not found.');
		}

		$this->deleteimage($new, 'newspic');
		
		$new->delete();
		
		return redirect()->route('admin_news')->with('message', 'News item deleted successfully.');
	}

	public function admin_news_img_delete($id = null) {

		if (!$id) return back();
    
		$new = News::find($id);

		if (!$new) {
			return back()->with('message', 'News item not found.');
		}

		$delimage = $this->deleteimage($new, 'newspic');

		if ($delimage) {
			return redirect()->route('admin_news_modify', ['id' => $new->id])->with('message', 'New picture deleted successfully.');
		} else {
			return redirect()->route('admin_news_modify', ['id' => $new->id])->with('message', 'Picture delete error!');
		}
	}
}
