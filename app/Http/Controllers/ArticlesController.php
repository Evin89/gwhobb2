<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticlesController extends Controller
{
	public function index(){
		$articles = Article::all();
		return view('articles.index', compact('articles'));
	}

	public function show(Article $article){
		return view('articles.show', compact('article'));
	}

	public function store(Request $request){
		// Function that stores the new  category
		$category = new Category;
		$category->title = $request->title;
		$category->body = $request->body;
		$category->save();
		return back();
	}

	public function delete(Category $category){
		// Delete function for Categories/Games
		$categoryToDelete = Category::find($category->id);
		$categoryToDelete->delete();
		return back();
	}

	public function edit(Category $category){
		// Function to show the edit page of the element you wish to edit
		return view('games.edit', compact('category'));
	}

	public function update(Category $category, Request $request){
		// Function that updates the element you wish to edit with its new conent.
		$categoryToUpdate = $request->id;
		$categoryToUpdate->title = $request->title;
		$categoryToUpdate->body = $request->body;
		$categoryToUpdate->save();
		return back();
	}
}
