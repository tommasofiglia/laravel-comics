@extends('layouts.dashboard')
@section('content')
  <div class="container">
    <h2>Modifica il fumetto</h2>

    <form action="{{route('admin.comics.update' ,['comic'=>$comic->slug])}}" method="post">
      @csrf
      @method('PUT')

      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

      {{-- Input per il title--}}
      <div class="form-group">
        <label for="title">Inserisci il titolo del fumetto</label>
        <input id="title" name="title" type="text" placeholder="Titolo qui" class="d-block" class="@error('title') is-invalid @enderror" value="{{$comic->title}}">
        <small class="form-text text-muted">Titolo del fumetto</small>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      {{-- Input per il prezzo --}}
      <div class="form-group">
        <label for="price">Inserisci il prezzo</label>
        <input id="price" name="price" type="number" min="0" step="0.01" placeholder="Prezzo qui" class="d-block" class="@error('price') is-invalid @enderror" value="{{$comic->price}}">
        <small class="form-text text-muted">Prezzo del fumetto</small>
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      {{-- Input per la disponibilità --}}
      <div class="form-group">
        <h5>Disponibilità</h5>
          <input type="radio" id="available" name="availability" value="1">
          <label for="1">Disponibile</label><br>
          <input type="radio" id="not_available" name="availability" value="0">
          <label for="0">Non disponibile</label><br>
      </div>

      {{-- Input per la descrizione --}}
      <div class="form-group">
        <label for="description">Inserisci la descrizione del prodotto</label>
        <textarea name="description" rows="8" cols="50" class="d-block" class="@error('description') is-invalid @enderror">{{$comic->description}}</textarea>
        <small class="form-text text-muted">Descrizione del prodotto</small>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      {{-- Input per l'artist --}}
      <div class="form-group">
        <label for="artist">Inserisci il nome del disegnatore</label>
        <input id="artist" name="artist" type="text" placeholder="Disegnatore qui" class="d-block" class="@error('description') is-invalid @enderror" value="{{$comic->artist}}">
        <small class="form-text text-muted">Nome del disegnatore</small>
        @error('artist')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      {{-- Input per il writer --}}
      <div class="form-group">
        <label for="writer">Inserisci il nome dello scrittore</label>
        <input id="writer" name="writer" type="text" placeholder="Scrittore qui" class="d-block" class="@error('writer') is-invalid @enderror" value="{{$comic->writer}}">
        <small class="form-text text-muted">Nome dello scrittore</small>
        @error('writer')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      {{-- Input per nome serie  --}}
      <div class="form-group">
        <label for="series">Inserisci il nome della serie</label>
        <input id="series" name="series" type="text" placeholder="Nome serie qui" class="d-block" class="@error('series') is-invalid @enderror" value="{{$comic->series}}">
        <small class="form-text text-muted">Nome della serie</small>
        @error('series')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      {{-- input per la data di uscita --}}
      <div class="form-group">
        <label for="sale_date">Seleziona la data di uscita</label>
        <input type="date" name="sale_date" class="@error('sale_date') is-invalid @enderror" value="{{$comic->sale_date}}">
          @error('sale_date')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>

      {{-- Input per numero dell'uscita --}}
      <div class="form-group">
        <label for="volume">Inserisci il numero di uscita</label>
        <input id="volume" name="volume" type="number" placeholder="Numero di uscita qui" class="d-block" min="0" class="@error('volume') is-invalid @enderror" value="{{$comic->volume}}">
        <small class="form-text text-muted">Numero di uscita del fumetto</small>
        @error('volume')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      {{-- Input per le dimensioni --}}
      <div class="form-group">
        <label for="trim_size">Inserisci le dimensioni del fumetto(larghezza x altezza x lunghezza)</label>
        <input id="trim_size" name="trim_size" type="text" placeholder="Dimensioni qui" class="d-block" class="@error('trim_size') is-invalid @enderror" value="{{$comic->trim_size}}">
        <small class="form-text text-muted">Dimensioni del volume</small>
        @error('trim_size')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      {{-- Input per il numero di pagine --}}
      <div class="form-group">
        <label for="pages">Inserisci il numero di pagine</label>
        <input id="pages" name="pages" type="number" placeholder="Numero di pagine qui" class="d-block" min="0" class="@error('pages') is-invalid @enderror" value="{{$comic->pages}}">
        <small class="form-text text-muted">Numero di pagine del fumetto</small>
        @error('pages')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      {{-- Input per la classifcazione --}}
      <div class="form-group">
        <label for="rated">Inserisci il tipo di classificazione</label>
        <input id="rated" name="rated" type="text" placeholder="Classificazione qui" class="d-block" class="@error('rated') is-invalid @enderror" value="{{$comic->rated}}">
        <small class="form-text text-muted">Classificazione</small>
        @error('rated')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <button type="submit" name="button" class="btn btn-success">Crea Fumetto</button>

    </form>

  </div>
@endsection
