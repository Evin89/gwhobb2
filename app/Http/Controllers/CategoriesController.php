<?php

namespace App\Http\Controllers;

use App\Category;
use DB;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
	public function index(){
		// function that shows the category overview page.
		$categories = Category::orderBy('title', 'asc')->get();
		return view('games.index', compact('categories'));
	}

	public function show(Category $category){
		// Function that shows the detail page of a certain category.
		return view('games.show', compact('category'));
	}

	public function create(){
		// Function shows the create page to create a new category.
		return view('games.create');
	}

	public function store(Request $request){

		// Valiidation of requesr.
		$this->validate($request , [
			'title' => 'required|unique:categories|max:300',
			'body' => 'required',
		]);

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

		$this->validate($request, [
			'id' => 'required',
			'title' => 'required|unique:categories|max:300',
			'body' => 'required',
			]);

		echo $category->id;
		echo $request->title;
		echo $request->body;

		// $categoryToUpdate = $category->id;
		$category->title = $request->title;
		$category->body = $request->body;
		$category->save();
		return back();
	}
}


