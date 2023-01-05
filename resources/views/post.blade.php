@extends('layouts.main')

@section('container')
    
    @foreach ($post as $posting)
        <h2>
            <a href="/post/{{ $posting->slug }}">{{ $posting->title }}</a>
        </h2>
        <h5>{{ $posting->author }}</h5>
        <p>{{ $posting->excerpt }}</p>
    @endforeach
@endsection 