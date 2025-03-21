@extends('layouts.app')

@section('title', 'Album Details')

@section('content')
<div class="max-w-7xl mx-auto py-6">
    <h1 class="text-3xl font-bold mb-6">Album Details</h1>
    
    

    <!-- Album Details Section -->
    <div class="bg-white p-6 shadow-md rounded-md">
        <h2 class="text-xl font-semibold mb-4">Album Naam: {{ $album->name }}</h2>
        <p class="text-lg mb-4"><strong>Jaar van Uitgave:</strong> {{ $album->year }}</p>
        <p class="text-lg mb-4"><strong>Verkocht:</strong> {{ $album->times_sold }} exemplaren</p>
        <p class="text-lg mb-4"><strong>Band:</strong> {{ $album->band->name }}</p>
        
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Songs in dit album:</h2>
            <ul class="space-y-2">
                @foreach($album->songs as $song)
                    <li class="bg-gray-100 p-3 rounded-md shadow-sm transition duration-200 ease-in-out hover:bg-gray-200 hover:shadow-md">
                        <a href="{{ route('songs.show', $song->id) }}" class="block w-full h-full">
                            🎵 {{ $song->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>



        <!-- Buttons for Edit or Delete -->
        <div class="mt-6">
            <a href="{{ route('albums.edit', $album->id) }}" 
               class="bg-black text-white px-4 py-2 rounded hover:bg-yellow-500">Bewerken</a>
            
            <form action="{{ route('albums.destroy', $album->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Weet je zeker dat je dit album wilt verwijderen?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                    Verwijderen
                </button>
            </form>
            <!-- Terug knop -->
            <div class="mt-6">
                <a href="{{ route('albums.index') }}" class="mt-60 bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Terug naar lijst</a>
            </div>
        </div>
        
    </div>
</div>
@endsection
