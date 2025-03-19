<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Band;
use App\Models\Song;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::all();  // Haal alle albums op
        return view('albums.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bands = Band::all(); // Haal alle bands op
    
        return view('albums.create', compact('bands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'year' => 'nullable|integer',
            'times_sold' => 'nullable|integer',
            'band_id' => 'required|exists:bands,id',
        ]);
    
        Album::create([
            'name' => $request->name,
            'year' => $request->year,
            'times_sold' => $request->times_sold,
            'band_id' => $request->band_id,
        ]);  // Voeg een nieuw album toe
        
        return redirect()->route('albums.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        $songs = $album->songs;  // Haal alle songs van het album op
        return view('albums.show', compact('album', 'songs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        $bands = Band::all(); // Haal alle Bands op
        return view('albums.edit', compact('album', 'bands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album, Band $band)
    {

        $request->validate([
            'name' => 'required|string',
            'release_year' => 'required|integer',
            'genre' => 'required|string',
        ]);

        $album->bands()->sync($request->bands);  // Synchroniseer de bands
        return redirect()->route('albums.index', compact('album', 'band'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        $album->delete();  // Verwijder het album
        return redirect()->route('albums.index');
    }
}
