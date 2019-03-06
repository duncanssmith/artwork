<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artwork;

class ArtworksController extends Controller
{
    public function index()
    {
        $artworks = Artwork::all();

        // return $artworks;

        return view('artworks.index', ['artworks' => $artworks]);
    }

    public function create()
    {
        return view('artworks.create');
    }

    public function store()
    {
        return request()->all();

        return redirect('/artworks');
    }
}
