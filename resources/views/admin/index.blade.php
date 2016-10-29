@extends('layouts.layout')

@section('content')

{{-- @if (Auth::check()) --}}
<div class="admin-panel">
	<div class="row">
		<div class="col-md-12">
			<h2>Admin panel</h2>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<p>Welkom  {{auth()->user()->name}}</p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-2">
			<p>
				<a href="games" class="btn btn-primary active btn-block" role="button">Spelcategoriën</a>
				<a href="news" class=" btn btn-primary active btn-block" role="button">Artikelen</a>
				<a href="users" class="btn btn-primary active btn-block" role="button">Gebruikers</a>
			</p>
		</div>
		<div class="col-md-10"></div>
	</div>
</div>

{{-- @endif --}}

@stop