@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Category : {{ $category }}</h1>

    @foreach ($posts as $posting)
        <h2>
            <a href="/post/{{ $posting->slug }}">{{ $posting->title }}</a>
        </h2>
        <h5>{{ $posting->author }}</h5>
        <p>{{ $posting->excerpt }}</p>
    @endforeach
@endsection 