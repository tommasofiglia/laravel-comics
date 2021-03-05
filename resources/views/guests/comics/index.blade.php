@extends('layouts.app')
@section('content')

    <div class="cards_container" id="main_comics">
    @foreach ($comics as $comic)

      <div class="card d-inline-block">
        <a href="{{route('comics.show', ['comic' => $comic->slug] )}}">
          <img src="{{asset('storage/' . $comic->cover )}}" alt="">
        </a>
        <p class="white text-uppercase ml-1 mt-2">{{$comic->title}}</p>
        @if ($comic->availability == 1)
          <p class="blue_principal text-uppercase ml-1"> Availible now</p>
        @else
          <p>not available</p>
        @endif
      </div>

    @endforeach
    </div>


@endsection
