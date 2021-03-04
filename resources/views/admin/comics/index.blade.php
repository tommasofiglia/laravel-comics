@extends('layouts.dashboard')
@section('content')
  <div class="container">

    <h1>Tutti i post per la sezione amministratore.</h1>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Price</th>
          <th>Availability</th>
          <th>Description</th>
          <th>Artist</th>
          <th>Writer</th>
          <th>Series</th>
          <th>On Sale Date</th>
          <th>Volume</th>
          <th>Trim Size</th>
          <th>Pages</th>
          <th>Rated</th>
          <th>Slug</th>
          <th>Cover Image</th>
          <th>Created</th>
          <th>Edited</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($comics as $comic)
        <tr>
          <td scope="row">{{$comic->id}}</td>
          <td>{{$comic->title}}</td>
          <td>{{$comic->price}}</td>
          <td>{{$comic->availability}}</td>
          <td>{{$comic->description}}</td>
          <td>{{$comic->artist}}</td>
          <td>{{$comic->writer}}</td>
          <td>{{$comic->series}}</td>
          <td>{{$comic->sale_date}}</td>
          <td>{{$comic->volume}}</td>
          <td>{{$comic->trim_size}}</td>
          <td>{{$comic->pages}}</td>
          <td>{{$comic->rated}}</td>
          <td>{{$comic->slug}}</td>
          <td>{{$comic->cover}}</td>
          <td>{{$comic->created_at}}</td>
          <td>{{$comic->updated_at}}</td>
          <td>
            <a href="#" class="btn btn-primary" style="margin-bottom: 10px">Leggi</a>
            <a href="#" class="btn btn-warning" style="margin-bottom: 10px">Modifica</a>
            <a href="#" class="btn btn-danger">Elimina</a>
          </td>
        </tr>
      @endforeach

      </tbody>
    </table>

  </div>
@endsection
