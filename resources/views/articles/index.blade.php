@extends('layouts.layout')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h2>Nieuws</h2>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<a href="/news/create">
			<div class=" read-more-button">Artikel toevoegen</div>
		</a>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
	<ul class="list-group">
		@foreach($articles as  $article)
		<li class="list-group-item"><a href="/news/{{  $article->id }}">{{  $article->title  }}</a><div class="pull-right">{{  $article->category->title }}</div></li>
		@endforeach
	</ul>
	</div>
</div>
{{-- @if (Auth::check()) --}}
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">Artikel toevoegen</div>
			<div class="panel-body">
				<form class="form-horizontal" role="form" method="POST" action="{{ url('/games/create') }}">
					{{ csrf_field() }}

					<div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
						<label for="`title" class="col-md-4 control-label">User id</label>

						<div class="col-md-8">
							<input id="title" type="text" class="form-control" name="user_id" value="{{ old('user_id') }}" required autofocus>

							@if ($errors->has('title'))
							<span class="help-block">
								<strong>{{ $errors->first('user_id') }}</strong>
							</span>
							@endif
						</div>
					</div>

					<div class="form-group{{ $errors->has('cateogry_id') ? ' has-error' : '' }}">
						<label for="`title" class="col-md-4 control-label">cateogry_id</label>

						<div class="col-md-8">
							<input id="title" type="text" class="form-control" name="cateogry_id" value="{{ old('cateogry_id') }}" required autofocus>

							@if ($errors->has('title'))
							<span class="help-block">
								<strong>{{ $errors->first('cateogry_id') }}</strong>
							</span>
							@endif
						</div>
					</div>

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

{{-- @endif --}}

</div>



@stop