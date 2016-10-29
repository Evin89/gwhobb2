@extends('layouts.layout')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h2>Spellen</h2>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<ul class="list-group">
			@foreach($categories as  $category)
			<li class="list-group-item"><a href="/games/{{  $category->id }}">{{  $category->title  }}</a>
				@if(Auth::check())
				<div class="pull-">
					<a href="/games/{{  $category->id }}/edit">Bewerk</a> |
					<a href="/games/{{  $category->id }}/delete">Verwijder</a>
				</div>
				@endif
			</li>
			@endforeach
		</ul>
	</div>
</div>
@if (Auth::check())
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">Spelcategorie toevoegen</div>
			<div class="panel-body">
				<form class="form-horizontal" role="form" method="POST" action="{{ url('/games/create') }}">
					{{!! csrf_field() !!}

					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<label for="`title" class="col-md-4 control-label">Title</label>

						<div class="col-md-8">
							<input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

							@if ($errors->has('title'))
							<span class="help-block">
								<strong>{{ $errors->first('title') }}</strong>
							</span>
							@endif
						</div>
					</div>

					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<label for="`body" class="col-md-4 control-label">body</label>

						<div class="col-md-8">
							<textarea name="body"  id="body" type="text" class="form-control" name="body" value="{{ old('body') }}" ></textarea>

							@if ($errors->has('body'))
							<span class="help-block">
								<strong>{{ $errors->first('body') }}</strong>
							</span>
							@endif
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary">
								Toevoegen
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endif

</div>

@stop