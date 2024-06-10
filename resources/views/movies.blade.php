@extends('layouts.app')

@section('content')
  
<div class="container">
  <h2>Movies</h2>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-5">
    @foreach ($movies as $movie) 
    <div class="col">
      <div class="card me-2">
        <img class="card-img-top" src={{$movie['image']}} alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $movie->title }}</h5>
          <p class="card-text">Vote: {{$movie->vote}}</p>
          <p class="card-text">{{$movie->date}}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

  {{-- @dd($movies); --}}
@endsection