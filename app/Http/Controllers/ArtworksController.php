<?php

namespace App\Http\Controllers;

use App\Artwork;

use Illuminate\Http\Request;

class ArtworksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artworks = Artwork::all();

        return view('artworks.index', ['artworks' => $artworks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artworks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artwork = new Artwork();
        $artwork->reference = request('reference');
        $artwork->title = request('title');
        $artwork->artist = request('artist');
        $artwork->media = request('media');
        $artwork->dimensions = request('dimensions');
        $artwork->date = request('date');
        $artwork->description = request('description');
        $artwork->notes = request('notes');
        $artwork->save();

        return redirect('/artworks');
    }

    /**
     * Display the specified resource.
     *
     * @param  Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function show(Artwork $artwork)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artwork = Artwork::find($id);

        return view('artworks.edit', ['artwork' => $artwork]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd('ello');

        // $artwork = Artwork::findOrFail($id);

        // $artwork->update($request->all());

        // $artwork->reference = request('reference');
        // $artwork->title = request('title');
        // $artwork->artist = request('artist');
        // $artwork->media = request('media');
        // $artwork->dimensions = request('dimensions');
        // $artwork->date = request('date');
        // $artwork->description = request('description');
        // $artwork->notes = request('notes');
        // $artwork->save();
        // return redirect('/artworks');

        // return view('artworks.update', ['artwork' => $artwork]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd("HELLO");
    }
}
