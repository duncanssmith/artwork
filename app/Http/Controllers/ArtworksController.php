<?php
/**
 * File doc
 *
 * @phpversion php7.3.0
 * @category   Controller
 * @package    Artwork
 * @author     Duncan Smith <duncanssmith@gmail.com>
 * @license    12341234 <blah@blah.com>
 * @link       Wombat <duncanssmith@gmail.com>
 */
namespace App\Http\Controllers;

use App\Artwork;

use Illuminate\Http\Request;

/**
 * The Artworks controller
 *
 * @category Controller
 * @package  Artwork
 * @author   Duncan Smith <duncanssmith@gmail.com>
 * @license  12341234 <blah@blah.com>
 * @link     Wombat <duncanssmith@gmail.com>
 */
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
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Artwork::create(
            request(
                ['reference', 'title', 'artist',
                 'media', 'dimensions', 'date',
                 'description', 'notes']
            )
        );

        return redirect('/artworks');
    }

    /**
     * Display the specified resource.
     *
     * @param Artwork $artwork The artwork
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Artwork $artwork)
    {
        return view('artworks.show', ['artwork' => $artwork]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Artwork $artwork The artwork
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Artwork $artwork)
    {
        return view('artworks.edit', ['artwork' => $artwork]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request The request object
     * @param Artwork                  $artwork The artwork
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artwork $artwork)
    {
        $artwork->update(
            request(
                ['reference', 'title', 'artist',
                 'media', 'dimensions', 'date',
                 'description', 'notes']
            )
        );

        return redirect('/artworks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Artwork $artwork The artwork
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artwork $artwork)
    {
        $artwork->delete();

        return redirect('/artworks');
    }
}
