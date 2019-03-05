<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artwork;

class ArtworksController extends Controller
{
    public function index()
    {
        $artworks = Artwork::all();

        return $artworks;

        return view('artworks.index');
    }
}
