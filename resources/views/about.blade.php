@extends('layouts.main')

@section('container')
    <div class="text-center">
        <figure class="text-center">
            <blockquote class="blockquote">
              <p>Untuk mengetahui sebuah takdir, engga ada pilihan selain 
                memberanikan dirimu.</p>
            </blockquote>
            <figcaption class="h6 blockquote-footer">
              <h6>Hermanto Prastyawan</h6>
            </figcaption>
          </figure>
        <div class="text-left mt-3">
            <h4 class="initialism border-top border-dark"><abbr title="about"> Tentang Penulis</abbr></h4>
            <p class="h6"><em>{{ $name; }}</em></p>
            <p class="h6"><em>Sidoarjo, 25-04-2002</em></p>
            <p class="h6"><em>{{ $email; }}</em></p>
        </div>  
        <img src="img/{{ $image;}}" alt="{{ $name;}}" width="200px" height="100px" class="img-thumbnail rounded text-center">
    </div>
@endsection