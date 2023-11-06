@extends('layout.main')

@section('container')
    <article class="mb-4">
        <h2>{{ $post->title }}</h2>
        <p>By Andre in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <p>{{ $post['author'] }}</p>
        <p>{!! $post['body'] !!}</p>
    </article>

    <a href="/posts"> Back to Posts</a>
@endsection
