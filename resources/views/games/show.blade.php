@extends('layouts.layout')

@section('content')

<h2>{{  $category->title  }}</h2>
<p>{{  $category->body  }}</p>

<h3>Nieuws voor {{  $category->title  }}</h3>
<ul>
	@foreach($category->articles as $article)

	<li><a href="/news/{{  $article->id}}">{{ $article->title }}</a></li>

	@endforeach
</ul>
{{-- <a href="/games/">Terug</a> --}}
@stop