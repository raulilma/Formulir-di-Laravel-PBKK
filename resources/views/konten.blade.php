@extends('template')

@section('container')
    <h1 class="mb-3 text-decoration-underline">{{ $article->title }}</h1>
    <p>By: <a href="/authors/{{ $article->user->username }}" class="text-decoration-none">{{ $article->user->name }}</a> in
         <a href="/categories/{{ $article->category->slug }}" class="text-decoration-none">
    {{ $article->category->name }}</a></p>
    {!! $article->body !!}
    <a href="/article" class="text-decoration-none">Back to articles</a>
@endsection