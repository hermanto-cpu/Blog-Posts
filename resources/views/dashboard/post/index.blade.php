@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>
    
    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($post as $posting)  
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $posting->title }}</td>
              <td>{{ $posting->category->name }}</td>
              <td><a href="/dashboard/post/{{ $posting->slug }}" class="badge bg-info"><span data-feather="eye"></span></a></td>
              <td><a href="/dashboard/post/{{ $posting->id }}" class="badge bg-success"><span data-feather="edit-3"></span></a></td>
              <td><a href="/dashboard/post/{{ $posting->id }}" class="badge bg-danger"><span data-feather="x"></span></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection