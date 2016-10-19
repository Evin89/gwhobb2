@extends('layouts.layout')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h2>{{  $event->title  }}</h2>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<p>Door: {{  $event->user->name }} op{{ $event->created_at }}</p>
		<p>{{ $event->description  }}</p>
		<p>Van {{  $event->from }} tot {{ $event->till }}</p>
		<p>Locatie: {{  $event->location }}</p>
		<p>Kosten: {{ $event->cost }}</p>

	</div>
	<div class="col-md-6">
	 <div id="map"></div>
 <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcV-8WKX20kCxNGG5FlV7sDYssOUXrCLA&callback=initMap"
    async defer></script>
	</div>
</div>

@stop