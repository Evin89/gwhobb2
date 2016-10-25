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
				<form class="form-horizontal" role="form" method="POST" action="{{ url('/news/create') }}">
					{{ csrf_field() }}

					<div class="form-group{{ $errors->has('cateogry_id') ? ' has-error' : '' }}">
						<label for="`title" class="col-md-4 control-label">Spel</label>

						<div class="col-md-8">

							<select class="form-control" id="category_id" name="category_id" required="">
								@foreach ($categories as $category)
								<option value="{{ $category->id }}">{{  $category->title }}</option>
								@endforeach
							</select>

							@if ($errors->has('category_id'))
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

					<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
						<label for="`body" class="col-md-4 control-label">Afbeelding</label>

						<div class="col-md-8">
							<input type="file" name="image"  id="image" name="pic" accept="image/*" value="{{ old('image') }}>

							@if ($errors->has('image'))
							<span class="help-block">
								<strong>{{ $errors->first('image') }}</strong>
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