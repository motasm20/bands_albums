<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Models\Album;
use App\Models\Song;

use Illuminate\Http\Request;

class BandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bands = Band::all();  // Haal alle bands op
        return view('bands.index', compact('bands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'genre' => 'required|string',
            'founded' => 'required|integer',
        ]);
    
        Band::create($request->all());  // Voeg een nieuwe band toe
        return redirect()->route('bands.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Band $band)
    {
        return view('bands.show', compact('band'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Band $band)
    {
        $albums = Album::all(); // Haal alle albums op
        return view('bands.edit', compact('band', 'albums'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Band $band)
    {
        $request->validate([
            'name' => 'required|string',
            'genre' => 'required|string',
            'founded' => 'required|integer',
        ]);

        $band->update($request->all());  // Werk de gegevens van de band bij
        return redirect()->route('bands.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Band $band)
    {
        $band->delete();  // Verwijder de band
        return redirect()->route('bands.index');
    }
}
