<?php

namespace App\Http\Controllers;

use App\Article;
use App\Event;;
use App\User;;


use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
	public function index()
	{
		$users = User::all();
		$articles = Article::orderBy('created_at', 'desc')->limit(3)->get();
		$events = Event::orderBy('created_at', 'desc')->limit(3)->get();

		return view('index', compact('articles', 'events', 'users'));

	}

	public function admin(){

		return view('admin.index');
	}
}
