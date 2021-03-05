<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    // Questa funziona serve a utilizzare lo slug nell'utilizzo del metodo show.
    // FONDAMENTALE
    public function getRouteKeyName()
    {
      return 'slug';
    }

    protected $fillable = ['title' , 'price', 'availability', 'description', 'artist', 'writer', 'series', 'sale_date', 'volume', 'trim_size', 'pages', 'rated', 'slug' , 'cover'];
}
