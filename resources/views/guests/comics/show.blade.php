@extends('layouts.app')
@section('content')
  <div id="show_blade">
    <div class="jumbo position-relative">
      <img src="{{asset('storage/' . $comic->cover )}}" class="position-absolute">
    </div>
    <div class="under_jumbo"></div>
    <div class="container text-uppercase">
      <h1 class="mt-5 mb-5">{{$comic->title}}</h1>
    </div>
  </div>
@endsection
