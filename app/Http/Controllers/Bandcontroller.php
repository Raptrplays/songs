<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bands;


class Bandcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bandCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'founded' => 'required|numeric',
        ]);

        $ban = new bands;
        $ban->name = $validatedData['name'];
        $ban->genre = $validatedData['genre'];
        $ban->founded = $validatedData['founded'];
        $ban->save();
        return redirect('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $index)
    {
        $ba = bands::where('id', $index)->get();
        return view('bandDetail', ['bands' => $index]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $index)
    {
        $band = bands::find($index);
        return view('bandEdit', compact( 'band' ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'founded' => 'required|numeric',
        ]);

        $ban = bands::find($id);
        $ban->name = $validatedData['name'];
        $ban->genre = $validatedData['genre'];
        $ban->founded = $validatedData['founded'];
        $ban->save();
        return redirect('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $band = bands::find($id);
        $band->delete();

        return redirect('index');
    }
}
