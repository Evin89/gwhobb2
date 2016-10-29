@extends('layouts.layout')

@section('content')

{{-- <div class="row">
	<div class="col-md-12">
		<h2>Home</h2>
	</div>
	<div class="col-md-12">
		<p>Welkom op de pagina van GWHobby.</p>
	</div>
</div>
 --}}
<div class="row">
	<div class="col-md-6">
		<h2>Nieuws</h2>
		<hr>
			@foreach($articles as  $article)
			<div class="article">
				<a href="/news/{{  $article->id }}"><h3>{{  $article->title }}</h3></a>
				<p>Door <span class="author">{{ $article->user->name }}</span> op {{ date('j-n-Y', strtotime($article->created_at)) }}</p>
				<p><a href="/news/{{ $article->id }}"><img src="/{{ $article->image }}" alt=""></a></p>
				<p>{!! str_limit($article->body, 300) !!}</p>
				<p><b>Category:</b> {{ $article->category->title }}</p>

				<a href="/news/{{  $article->id }}"><button class="read-more-button">Lees meer</button></a>
			</div>
			@endforeach
	</div>
	<div class="col-md-6">
		<h2>Evenementen</h2>
		<hr>
			@foreach($events as  $event)
			<div class="event">
			<a href="/events/{{  $event->id }}"><h3>{{  $event->title }}</h3></a>
			<p>Door <span class="author">{{ $event->user->name }}</span> op {{ date('j-n-Y', strtotime($event->from))}}</p>
			<p>{{  $event->description }}</p>
			<p>{{  $event->location }}</p>
			<a href="/events/{{  $event->id }}"><button class="read-more-button">Lees meer</button></a>
			</div>
			@endforeach
	</div>
{{-- 	<div class="col-md-4">
		<h2Reviews</h2>
		<ul class="list-group">
			@foreach($articles as  $article)
			<li class="list-group-item"><a href="/news/{{  $article->id }}">{{  $article->title  }}</a><div class="pull-right">{{  $article->category->title }}</div></li>
			@endforeach
		</ul>
	</div> --}}
</div>

@stop