<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  // Guests homepage
  public function index()
  {
    return view('guests.index');
  }

  //  Guests characters
  public function characters()
  {
    return view('guests.characters');
  }

  // Guests movies
  public function movies()
  {
    return view('guests.movies');
  }

  // Guest tv
  public function tv()
  {
    return view('guests.tv');
  }

  // Guests games
  public function games()
  {
    return view('guests.games');
  }

  // Guests videos
  public function videos()
  {
    return view('guests.videos');
  }

  // Guests news
  public function news()
  {
    return view('guests.news');
  }

  // Guests shop
  public function shop()
  {
    return view('guests.shop');
  }
}
