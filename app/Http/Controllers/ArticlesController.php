<?php

namespace App\Http\Controllers;

use Input;
use Illuminate\Support\Facades\Auth;
use App\Article;
use App\Category;
use Illuminate\Http\Request;
use Validator;

use App\Http\Requests;

class ArticlesController extends Controller
{
	public function index(){
		$articles = Article::all();
		$categories = Category::all();
		return view('articles.index', compact('articles', 'categories'));
	}

	public function show(Article $article){
		return view('articles.show', compact('article'));
	}

	public function store(Request $request){
		// Function that stores the new  category.

		// Validation.
		// $this->validate($request, [
		// 	'user_id' => 'required',
		// 	'category_id' => 'required',
		// 	'title' => 'required|max:300',
		// 	'body' => 'required',
		// 	]);


		$user = Auth::user();
		$article = new Article;

		echo $article->user_id = $user->id;
		echo '<br>';
		echo $article->category_id = $request->category_id;
		echo '<br>';
		echo $article->title = $request->title;
		echo '<br>';
		echo $article->body = $request->body;
		echo '<br>';

		if ($request->hasFile('image')) {
			if ($request->file('image')->isValid()) {

  			// getting all of the post data
  			$path = 'img/'; // upload path
  			echo $path.'<br>';
  			$opath = $request->image->path(); // Original path, not needed, just for testing.
			$extension = $request->image->extension(); // getting image extension
			echo $extension.'<br>';
			echo 'filename: <br>';
			echo $fileName =  $request->file('image')->getClientOriginalName(); // get the files original filename
			echo '<br>';
			$request->image->storeAs($path, $fileName);// uploading file to given path

			echo $article->image = $path.$fileName;
			echo '<br>';

		} else {
			echo 'image is not valid';
		}

	} else {
		echo 'request has no image';
	}

		$article->save();
		return back();
}


public function delete(Article $category){
		// Delete function for Categories/Games
	$articleToDelete = Article::find($category->id);
	$articleToDelete->delete();
	return back();
}

public function edit(Article $category){
		// Function to show the edit page of the element you wish to edit
	return view('games.edit', compact('category'));
}

public function update(Article $category, Request $request){
		// Function that updates the element you wish to edit with its new conent.
	$articleToUpdate = $request->id;
	$articleToUpdate->title = $request->title;
	$articleToUpdate->body = $request->body;
	$articleToUpdate->save();
	return back();
}
}
