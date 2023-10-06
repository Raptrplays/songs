<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bands;
use App\Models\albums;


class Songcontroller extends Controller
{

    public function index()
    {
      $bands = bands::all();
      $albums = albums::all();
      return view('songs/index', ['bands' => $bands, 'albums' => $albums]);
    }


    public function create()
    {
        return view('songs/create');
    }


    public function store(Request $request)
    {
        //
    }


    
    public function show($index)
    {
        $ab = albums::where('id', $index)->get();
        return view('detail', ['albums' => $index]);
    }


    public function edit($index)
    {
        $album = albums::find($index);
        return view('edit', compact( 'album' ));
    }


    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        $album = albums::find($id);
        $album->delete();

        $bands = bands::find($id);
        $bands->delete();
        return redirect('songs/index');
    }
}
