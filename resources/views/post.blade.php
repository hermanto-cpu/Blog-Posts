@extends('layouts.main')

@section('container')
    
    @foreach ($post as $posting)
       <article class="mb-5 border-bottom pb-3">
        <h2><a href="/post/{{ $posting->slug }}" class="text-decoration-none">{{ $posting->title }}</a></h2>
            <h5>By : <a href="#">{{ $posting->user->name }}</a> | category <a href="/categories/{{ $posting->category->slug}}" class="text-decoration-none">{{ $posting->category->name}}</a></h6>
              <h6>  <p>{{ $posting->excerpt }}</p>
                <a href="/post/{{ $posting->slug }}" class="text-decoration-none">Read more...</a>
              </h6>
        </article>
    @endforeach
@endsection 