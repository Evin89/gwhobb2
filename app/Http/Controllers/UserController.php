<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use DB;
use Illuminate\Http\Request;



class UserController extends Controller
{
	public function index(){
		$users = User::all();
		return view('users.index', compact('users'));
	}

	public function update(Request $request){
		echo $id = $request->id;

		$user = User::find($id);
		echo $user->name;


		echo '<br>';
		echo $admin = $request->admin;
		echo '<br>';
		echo $editor = $request->editor;
		echo '<br>';
		echo $organiser = $request->organiser;
		echo '<br>';

		if ($admin == 'on'){
			$role = Role::find(1);
			$user->roles()->attach($role->id);
			echo 'make admin';
		} else {
			$role = Role::find(1);
			echo 'unmake admin';
			$user->roles()->detach($role->id);
		}

		if ($editor == 'on'){
			$role = Role::find(2);
			$user->roles()->attach($role->id);
			echo 'make editor';
		} else {
			$role = Role::find(2);
			echo 'unmake editor';
			$user->roles()->detach($role->id);
		}

		if ($organiser == 'on'){
			$role = Role::find(3);
			echo 'make organiser';
			$user->roles()->attach($role->id);
		} else {
			$role = Role::find(3);
			echo 'unmake organiser';
			$user->roles()->detach($role->id);
		}

		return back();

	}

	public function delete(User $user){
		// Delete function for Categories/Games
		$userToDelete = User::find($user->id);
		$userToDelete->delete();
		return back();
	}
}
