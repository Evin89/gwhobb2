@extends('layouts.layout')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h2>Evenementen</h2>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<ul class="list-group">
			@foreach($events as  $event)
			<li class="list-group-item"><a href="/events/{{  $event->id }}">{{  $event->title  }}</a> - {{ $event->from }} in {{ $event->location }}
				@if(Auth::check())
				<div class="pull-right">
					<a href="/events/{{  $event->id }}/edit">Bewerk</a> |
					<a href="/events/{{  $event->id }}/delete">Verwijder</a>
				</div>
				@endif
			</li>
			@endforeach
		</ul>
	</div>
</div>

@stop