@extends('layouts.layout')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h2>Nieuws</h2>
		<hr>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		@foreach($articles as  $article)
		<div class="row">
			<div class="col-md-12">
				<h3>{{  $article->title }}</h3>
				@if(Auth::check())
				<div class="pull-">
					<a href="/news/{{  $article->id }}/edit">Bewerk</a> |
					<a href="/news/{{  $article->id }}/delete">Verwijder</a>
				</div>
				@endif
				<p>Door <span class="author">{{ $article->user->name }}</span> op {{ $article->created_at }}</p>
				<p>{!! str_limit($article->body, 300) !!}</p>
				<p><b>Category:</b> {{ $article->category->title }}</p>
				<p><a href="/news/{{ $article->id }}"><img src="/{{ $article->image }}" alt=""></a></p>
				<a href="/news/{{  $article->id }}"><button class="read-more-button">Lees meer</button></a>

			</div>
		</div>
		@endforeach

	</div>

@if (Auth::check())
<div class="col-md-6">
	<div class="panel panel-default">
		<div class="panel-heading">Artikel toevoegen</div>
		<div class="panel-body">

			<form class="form-horizontal" role="form" method="POST" action="{{ url('/news/create') }}" files="true" enctype="multipart/form-data">
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
						<textarea name="body"  id="summernote" type="text" class="form-control" name="body" value="{{ old('body') }}" ></textarea>

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
						<input type="file" name="image"  id="image" name="pic" accept="image/*" class="form-control" value="{{ old('image') }}>

						@if ($errors->has('image'))
						<span class="help-block">
							<strong>{{ $errors->first('image') }}</strong>
						</span>
						@endif
					</div>
				</div>

				<div class="form-group">
					<button type="submit" class="form-controlbtn btn-primary">Toevoegen</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endif

</div>



@stop