<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Http\Requests;

class ProfileController extends Controller
{
	public function index(){
		$user = Auth::user();

		$roles = $user->roles;
		return view('profile.index', compact('roles'));
	}
}
