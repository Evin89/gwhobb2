<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Http\Requests;
use DB;
class ArticlesController extends Controller
{

	public function index(){
		$articles = DB::table('articles')->get();
		$events = DB::table('events')->get();
		return view('index', compact('articles', 'events'));
	}

	public function create()
	{
		return view('createArticle');
	}

	public function store(Request $request)
	{
		$article = new Article;

		$article ->title = $request->title;
		$article ->body = $request->body;

		$article->save($article);


	}
}
