@extends('layout.main')

@section('container')
    @foreach ($posts as $row)
        <article class="mb-5 border-bottom">
            <h2>
                <a href="/posts/{{ $row->slug }}" class="text-decoration-none">{{ $row->title }}</a>
            </h2>
            <p>By Andre in <a href="/categories/{{ $row->category->slug }} "
                    class="text-decoration-none">{{ $row->category->name }}</a></p>
            <p>{{ $row->excerpt }}</p>
        </article>
    @endforeach
@endsection
