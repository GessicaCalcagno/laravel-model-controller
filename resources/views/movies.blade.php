@extends('layouts.app')

@section('content')
  <h2>Movies</h2>
  <ul>
    @foreach ($movies as $movie) 
      <li>{{ $movie->title }}</li>
    @endforeach
  </ul>
  {{-- @dd($movies); --}}
@endsection