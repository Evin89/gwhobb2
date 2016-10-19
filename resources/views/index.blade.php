@extends('layouts.layout')

@section('content')

<h2>Home</h2>
<p>Welkom op de pagina van GWHobby.</p>
<div class="row">
	<div class="col-md-6">
		<h3>Nieuws</h3>
			@foreach($articles as  $article)
			<div class="list-article">
				<h4>{{  $article->title }}</h4>
				<p>{{ $article->created_at}} door {{ $article->user->name }}</p>
				<p>{{ str_limit($article->body, 300) }}</p>
				<p><b>Category:</b> {{ $article->category->title }}</p>
				<a href="/news/{{  $article->id }}"><button class="read-more-button">Lees meer</button></a>
			</div>
			@endforeach
	</div>
	<div class="col-md-6">
		<h3>Evenementen</h3>
			@foreach($events as  $event)
			<h4>{{  $event->title }}</h4>
			<p>{{  $event->from }}</p>
			<p>{{  $event->description }}</p>
			<p>{{  $event->location }}</p>
			<a href="/events/{{  $event->id }}"><button class="read-more-button">Lees meer</button></a>
			@endforeach
	</div>
{{-- 	<div class="col-md-4">
		<h3>Reviews</h3>
		<ul class="list-group">
			@foreach($articles as  $article)
			<li class="list-group-item"><a href="/news/{{  $article->id }}">{{  $article->title  }}</a><div class="pull-right">{{  $article->category->title }}</div></li>
			@endforeach
		</ul>
	</div> --}}
</div>

@stop