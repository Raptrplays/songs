<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Songcontroller extends Controller
{

    public function index()
    {
        $songs = [
        'Living on a prayer', 
        'Nothing else matters', 
        'Thunderstruck', 
        'Back in black', 
        'Ace of spades'
        ];

        return view ('songs', ['songs' => $songs]);
    }


    public function create()
    {
        return view ('songs.create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        return view('songs.show');
    }


    public function edit(string $id)
    {
        return view('songs.edit');
    }


    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
