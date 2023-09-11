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


    
    public function show($index)
    {
        $songs = [
            'Living on a prayer', 
            'Nothing else matters', 
            'Thunderstruck', 
            'Back in black', 
            'Ace of spades'
            ];

        $index = $songs[$index];
        return view('songs.show', ['song' => $index]);
    }


    public function edit($index)
    {
        $songs = [
            'Living on a prayer', 
            'Nothing else matters', 
            'Thunderstruck', 
            'Back in black', 
            'Ace of spades'
            ];

        $index = $songs[$index];
        return view('songs.edit', ['song' => $index]);
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
