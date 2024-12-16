@extends('layouts.app')

@section('title', 'Song Details')

@section('content')
<div class="max-w-7xl mx-auto py-6">
    <h1 class="text-3xl font-bold mb-6">Song Details</h1>

    <!-- Song Details Section -->
    <div class="bg-white p-6 shadow-md rounded-md">
        <h2 class="text-xl font-semibold mb-4">Titel: {{ $song->title }}</h2>
        <p class="text-lg mb-4"><strong>Zanger:</strong> {{ $song->singer }}</p>
        
        <!-- Additional Information (if available) -->
        @if($song->album)
            <p class="text-lg mb-4"><strong>Album:</strong> {{ $song->album->name }}</p>
        @endif

        @if($song->genre)
            <p class="text-lg mb-4"><strong>Genre:</strong> {{ $song->genre }}</p>
        @endif

        <!-- Buttons for Edit or Delete -->
        <div class="mt-6">
            <a href="{{ route('songs.edit', $song->id) }}" 
               class="bg-black text-white px-4 py-2 rounded hover:bg-yellow-500">Bewerken</a>
            
            <form action="{{ route('songs.destroy', $song->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Weet je zeker dat je deze song wilt verwijderen?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                    Verwijderen
                </button>
            </form>
            <!-- Terug knop -->
            <div class="mt-6">
                <a href="{{ route('songs.index') }}" class="mt-60 bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Terug naar lijst</a>
            </div>
        </div>
    </div>
</div>
@endsection
