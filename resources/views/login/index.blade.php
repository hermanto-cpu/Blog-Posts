@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
   @if(session()->has('succees')) 
    <div class="col-md-4">
      <div class="alert alert-dark alert-dismissible fade show" role="alert">
        {{ session('succees') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
            <form>
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="Email adress">
                <h6><label for="floatingInput">Email address</label></h6>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <h6><label for="floatingPassword">Password</label></h6>
              </div>

              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <h6><small class="d-block text-center mt-3">Not reegistered? <a href="/register">Register Now!</a></small></h6>
        </main>
    </div>
</div>
@endsection