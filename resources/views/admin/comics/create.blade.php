@extends('layouts.dashboard')
@section('content')
  <div class="container">

    <form action="index.html" method="post">
      @csrf

      {{-- Input per il title--}}
      <div class="form-group">
        <label for="title">Inserisci il titolo del fumetto</label>
        <input id="title" name="title" type="text" placeholder="Titolo qui" class="d-block">
        <small class="form-text text-muted">Titolo del fumetto</small>
      </div>

      {{-- Input per il prezzo --}}
      <div class="form-group">
        <label for="price">Inserisci il prezzo</label>
        <input id="price" name="price" type="number" min="0" step="0.01" placeholder="Prezzo qui" class="d-block">
        <small class="form-text text-muted">Prezzo del fumetto</small>
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
        <textarea name="description" rows="8" cols="50" class="d-block"></textarea>
        <small class="form-text text-muted">Descrizione del prodotto</small>
      </div>

      {{-- Input per l'artist --}}
      <div class="form-group">
        <label for="artist">Inserisci il nome del disegnatore</label>
        <input id="artist" name="artist" type="text" placeholder="Disegnatore qui" class="d-block">
        <small class="form-text text-muted">Nome del disegnatore</small>
      </div>

      {{-- Input per il writer --}}
      <div class="form-group">
        <label for="writer">Inserisci il nome dello scrittore</label>
        <input id="writer" name="writer" type="text" placeholder="Scrittore qui" class="d-block">
        <small class="form-text text-muted">Nome dello scrittore</small>
      </div>

      {{-- Input per nome serie  --}}
      <div class="form-group">
        <label for="series">Inserisci il nome della serie</label>
        <input id="series" name="series" type="text" placeholder="Nome serie qui" class="d-block">
        <small class="form-text text-muted">Nome della serie</small>
      </div>

      {{-- input per la data di uscita --}}
      <div class="form-group">
        <label for="sale_date">Seleziona la data di uscita</label>
        <input type="date" name="sale_date">
      </div>

      {{-- Input per numero dell'uscita --}}
      <div class="form-group">
        <label for="volume">Inserisci il numero di uscita</label>
        <input id="volume" name="volume" type="number" placeholder="Numero di uscita qui" class="d-block" min="0">
        <small class="form-text text-muted">Numero di uscita del fumetto</small>
      </div>

      {{-- Input per le dimensioni --}}
      <div class="form-group">
        <label for="trim_size">Inserisci le dimensioni del fumetto(larghezza x altezza x lunghezza)</label>
        <input id="trim_size" name="trim_size" type="text" placeholder="Dimensioni qui" class="d-block">
        <small class="form-text text-muted">Dimensioni del volume</small>
      </div>

      {{-- Input per il numero di pagine --}}
      <div class="form-group">
        <label for="pages">Inserisci il numero di pagine</label>
        <input id="pages" name="pages" type="number" placeholder="Numero di pagine qui" class="d-block" min="0">
        <small class="form-text text-muted">Numero di pagine del fumetto</small>
      </div>

      {{-- Input per la classifcazione --}}
      <div class="form-group">
        <label for="rated">Inserisci il tipo di classificazione</label>
        <input id="rated" name="rated" type="text" placeholder="Classificazione qui" class="d-block">
        <small class="form-text text-muted">Classificazione</small>
      </div>

      <button type="submit" name="button" class="btn btn-success">Crea Fumetto</button>






    </form>

  </div>
@endsection
