@extends('layouts.layout')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h2>Bewerk: {{  $category->title  }}</h2>
	</div>
</div>

<div class="row">
	<div class="panel-body">
		<form class="form-horizontal" role="form" method="POST" action="/games/{{ $category->id}}">
			{{  method_field("PATCH") }}
			{{ csrf_field() }}

			<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
				<label for="`title" class="col-md-12">Title</label>

				<div class="col-md-12">
					<input id="title" type="text" class="form-control" name="title"  required autofocus value="{{ $category->title }}">

					@if ($errors->has('title'))
					<span class="help-block">
						<strong>{{ $errors->first('title') }}</strong>
					</span>
					@endif
				</div>
			</div>

			<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
				<label for="`body" class="col-md-12">body</label>

				<div class="col-md-12">
					<textarea name="body"  id="body" type="text" class="form-control" name="body">{{ $category->body }}</textarea>

					@if ($errors->has('body'))
					<span class="help-block">
						<strong>{{ $errors->first('body') }}</strong>
					</span>
					@endif
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-6">
					<button type="submit" class="btn btn-primary">
						BIjwerken
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
@stop