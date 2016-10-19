@extends('layouts.layout')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h2>Profiel</h2>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<span>Hallo  {{auth()->user()->name}}</span>
	</div>
</div>

@stop