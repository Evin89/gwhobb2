<?php

namespace App\Http\Controllers;

use App\Event;
use App\User;
use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class EventsController extends Controller
{
    public function index(){
		// function that shows the category overview page.
		$events = Event::orderBy('from', 'asc')->get();
		return view('events.index', compact('events'));
	}

	public function show(Event $event){
		// Function that shows the detail page of a certain category.
		return view('events.show', compact('event'));
	}
}
