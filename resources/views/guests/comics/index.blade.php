@extends('layouts.app')
@section('content')

  <div class="container">
  @foreach ($comics as $comic)
    <div class="card d-inline-block">
      <a href="{{route('comics.show', ['comic' => $comic->slug] )}}">
        <img src="{{asset('storage/' . $comic->cover )}}" alt="">
      </a>
      <h5>{{$comic->title}}</h5>
    </div>
  @endforeach
  </div>

@endsection
