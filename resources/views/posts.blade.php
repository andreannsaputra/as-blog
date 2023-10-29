@extends('layout.main')

@section('container')
    @foreach ($posts as $row)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $row['slug'] }}">{{ $row['title'] }}</a>
            </h2>
            <h5>{{ $row['author'] }}</h5>
            <p>{{ $row['body'] }}</p>
        </article>
    @endforeach
@endsection
