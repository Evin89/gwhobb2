@extends('layouts/layout')
@section('content')
<div class="row">
	<div class="col-md-6">

		<h2>Create an article</h2>

		<form action="articles" method="POST">
			<div class="form-group">
				{{-- <input type="numner" name="user_id" placeholder="User ID" class="form-control"> --}}
				<input type="text" name="title" placeholder="Naam" class="form-control">
				<textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
				<button type="submit"  class="form-control btn btn-primary">Verzenden</button>
			</div>
		</form>
	</div>
</div>
@stop