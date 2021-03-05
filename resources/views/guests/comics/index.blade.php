@extends('layouts.app')
@section('content')

  <div class="container">
  @foreach ($comics as $comic)
      <a href="{{route('comics.show', ['comic' => $comic->slug] )}}">
        <img src="{{asset('storage/' . $comic->cover )}}" alt="">
      </a>
  @endforeach
  </div>

@endsection
