 @extends('layouts/layout')

 @section('content')

 <h2>Home</h2>
 <div class="row">
 	<div class="articles col-md-4">
 		<h3>News</h3>

 		@foreach ($articles as $article)
 		<div>
 			<div>
 				<h4>{{ $article->title }}</h4>
 				by {{ $article->user_id }} posted at {{ $article->created_at }}
 			</div>
 			<div>{{ $article->body}}</div>
 		</div>
 		@endforeach
 	</div>
 	<div class="events col-md-4">
 		<h3>Events</h3>
 		@foreach ($events as $event)
 		<div>
 			<div>
 				<h4>{{ $event->title }}</h4>
 				by {{ $event->user_id }} posted at {{ $event ->created_at }}

 			</div>
 			<div>{{ $event->body}}</div>
 			<div>Location: {{ $event->location }}</div>
 			<div>From: {{ $event->from }}</div>
 			<div>Till: {{ $event->to }}</div>
 		</div>
 		@endforeach
 	</div>
 	<div class="col-md-4">
 		<h3>Reviews</h3>
 	</div>
 </div>

 @stop