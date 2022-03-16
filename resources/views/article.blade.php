@extends('template')

@section('container')
    <h2 class="text-decoration-underline">Halaman Artikel Berita</h2>
    {{-- <h6>Editor: {{ $name }} | {{ $email }}</h6> --}}
    <hr/>
    @foreach($articles as $article)
        <article class="mb-5 border-bottom pb-5">
            <h3>
                <a href="/article/{{ $article->slug }}" class="text-decoration-none">
                {{ $article->title }}
                </a>
            </h3>
            <p>By: <a href="/authors/{{ $article->user->username }}" 
                class="text-decoration-none">{{ $article->user->name }}</a> in 
                <a href="/categories/{{ $article->category->slug }}" class="text-decoration-none">
                {{ $article->category->name }}</a></p>
            
            <p>{{ $article->excerpt }}</p>
            <a href="/article/{{ $article->slug }}" class="text-decoration-none">Read more..</a>
        </article>
    @endforeach
@endsection
