@extends('layouts.main')

@section('container')
    <article>
    <h2>{{ $post["title"] }}</h2>
    <h5>By : <a href="">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
    <h5>{{ $post["author"] }}</h5>
    <p>{{ $post["body"] }}</p>
    </article>

    <a href="/blog">Back to Posts</a>
@endsection