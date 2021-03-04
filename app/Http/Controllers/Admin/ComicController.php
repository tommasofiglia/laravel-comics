<?php

namespace App\Http\Controllers\Admin;
use App\Comic;
// Comando per importare il comando str
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderBy('id', 'desc')->get();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->title);

        //Validazione per ciò che arriva dal metodo create
        $comicValidation = $request->validate([
          'title' => 'required',
          'price' => 'required',
          'availability' => 'required',
          'description' => 'required',
          'artist' => 'required',
          'writer' => 'required',
          'series' => 'required',
          'sale_date' => 'required',
          'volume' => 'required',
          'trim_size' => 'required',
          'pages' => 'required',
          'rated' => 'required'
        ]);

        $comicValidation['slug'] = $slug;

        Comic::create($comicValidation);
        $comic = Comic::orderby('id', 'desc')->first();

        return redirect()->route('admin.comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit',compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
      $comics = $request->all();
      
      // Modifica dello slug con quello nuovo nel caso in cui modifichi il title
      $slug = Str::slug($request->title);
      $comics['slug'] = $slug;

      $comic->update($comics);

      return redirect()->route('admin.comics.index', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
      $comic->delete();
      return redirect()->route('admin.comics.index');
    }
}
