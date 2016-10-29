@extends('layouts.layout')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h2>Profiel</h2>
		<hr>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<p>Welkom  {{auth()->user()->name}}</p>
	</div>
	<div class="col-md-12">
		<p>U heeft de volgende rechten:</p>
		<ul>
			@if($roles != null)
			@foreach ($roles as $role)
			<li>{{ $role->name }}</li>
			@endforeach
		</ul>
		@endif
	</div>
</div>

@stop