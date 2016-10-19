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
		$articles = Article::all();
		$events = Event::all();
		return view('index', compact('articles', 'events', 'users'));

	}

	public function admin(){

		return view('admin.index');
	}
}
