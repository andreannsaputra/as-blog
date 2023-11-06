@extends('layout.main')

@section('container')
    <h1>Post Category : {{ $category }}</h1>

    @foreach ($posts as $row)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $row->slug }}">{{ $row->title }}</a>
            </h2>
            <p>{{ $row->excerpt }}</p>
        </article>
    @endforeach
@endsection
