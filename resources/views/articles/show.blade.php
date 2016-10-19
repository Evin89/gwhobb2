@extends('layouts.layout')

@section('content')

<h2>{{  $article->title  }}</h2>
<p>Posted by: {{  $article->user_id }} at: {{ $article->created_at }}</p>
<p>{{ $article->body  }}</p>
<p> Categorie: {{ $article->category->title}}</p>
{{-- <a href="/news/">Terug</a> --}}
@stop