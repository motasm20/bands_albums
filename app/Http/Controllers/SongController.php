<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Band;
use App\Models\Album;

use Illuminate\Http\Request;


class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs = Song::all();  // Haal alle songs op
        return view('songs.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $albums = Album::all(); // Haal alle albums op
        return view('songs.create', compact('albums'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'singer' => 'required|string',
            
        ]);

        Song::create($request->all());  // Voeg een nieuwe song toe
        return redirect()->route('songs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        return view('songs.show', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        $albums = Album::all(); // Haal alle albums op
        return view('songs.edit', compact('song', 'albums'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        $request->validate([
            'title' => 'required|string',
            'singer' => 'required|string',
            
        ]);
        $song->albums()->sync($request->albums); // Sync de geselecteerde albums
        $song->update($request->all());  // Werk de song bij
        return redirect()->route('songs.index', $song);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        $song->delete();  // Verwijder de song
        return redirect()->route('songs.index');
    }
}
