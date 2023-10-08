<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\albums;
use App\Models\bands;

class Homecontroller extends Controller
{
    public function index()
    {
      $albums = albums::all();
      $bands = bands::all();
      return view('index', ['bands' => $bands, 'albums' => $albums]);
    }
}
