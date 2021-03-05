<?php

namespace App\Http\Controllers;
use App\Comic;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComicController extends Controller
{
  public function index()
  {
    $comics=Comic::all();
    return view('guests.comics.index', compact('comics'));
  }

  public function show(Comic $comic)
  {
    return view('guests.comics.show', compact('comic'));
  }
}
