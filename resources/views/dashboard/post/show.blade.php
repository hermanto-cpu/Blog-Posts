@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-lg-8">
        <h1 class="my-3">{{ $posting->title }}</h1>
        <a href="/dashboard/post" class="btn btn-dark"><span data-feather="arrow-left"></span>Back to my posts</a>
        <a href="/dashboard/post/{{ $posting->slug }}/edit" class="btn btn-success"><span data-feather="edit-3"></span>Edit</a>
        <form action="/dashboard/post/{{ $posting->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm ('Are you sure want to delete post?')">
              <span data-feather="x"></span> Delete</button>
          </form>
          @if ($posting->image)
          <img src="{{ asset('storage/' . $posting->image) }}" alt="{{ $posting->category->name }}" class="img-fluid mt-3">        
          @else
          <img src="https://source.unsplash.com/1200x400/?{{ $posting->category->name }}" alt="{{ $posting->category->name }}" class="img-fluid mt-3">    
          @endif
        <article class="my-3 fs-6">
            <h6>{!! $posting->body !!}</h6>
        </article>
        </div>
    </div>
</div>

@endsection