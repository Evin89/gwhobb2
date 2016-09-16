@extends('layout')

@section('content')

<h2>News</h2>

@foreach ($artciles as $article)
	<div>
		{{ $article->title }}
	</div>

@stop