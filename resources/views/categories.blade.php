@extends('layout.main')

@section('container')
    <h1>Post Category</h1>

    @foreach ($categories as $row)
        <ul>
            <h2>
                <li><a href="/posts/{{ $row->slug }}">{{ $row->name }}</a></li>
            </h2>
        </ul>
    @endforeach
@endsection
