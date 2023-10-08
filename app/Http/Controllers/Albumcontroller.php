<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\albums;


class Albumcontroller extends Controller
{

    public function index()
    {
      //
    }


    public function create()
    {
        return view('albumCreate');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'year' => 'required|numeric',
            'times_sold' => 'required|numeric',
        ]);

        $alb = new albums;
        $alb->name = $validatedData['name'];
        $alb->year = $validatedData['year'];
        $alb->times_sold = $validatedData['times_sold'];
        $alb->save();
        return redirect('index');
    }


    
    public function show($index)
    {
        $ab = albums::where('id', $index)->get();
        return view('albumDetail', ['albums' => $index]);
    }


    public function edit($index)
    {
        $album = albums::find($index);
        return view('albumEdit', compact( 'album' ));
    }


    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'year' => 'required|numeric',
            'times_sold' => 'required|numeric',
        ]);

        $alb = albums::find($id);
        $alb->name = $validatedData['name'];
        $alb->year = $validatedData['year'];
        $alb->times_sold = $validatedData['times_sold'];
        $alb->save();
        return redirect('index');
    }

    public function destroy(string $id)
    {
        $album = albums::find($id);
        $album->delete();

        return redirect('index');
    }
}
