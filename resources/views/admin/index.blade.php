@extends('layouts.layout')

@section('content')

{{-- @if (Auth::check()) --}}
<div class="admin-panel">
	<div class="row">
		<div class="col-md-12">
			<h2>Admin panel</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			{{-- <span>Hello  {{auth()->user()->name}}</span> --}}
		</div>
	</div>

	<div class="row">
		<div class="col-md-2">
			<ul>
				<li><a href="games">Spelcategoriën</a></li>
				<li><a href="news">Artikelen</a></li>
				<li><a href="users">Gebruikers</a></li>

			</ul>
		</div>
		<div class="col-md-10"></div>
	</div>
</div>

{{-- @endif --}}

@stop