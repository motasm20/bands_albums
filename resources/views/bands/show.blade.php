@extends('layouts.app')

@section('title', 'Band Details')

@section('content')
<div class="max-w-7xl mx-auto py-6">
    <h1 class="text-3xl font-bold mb-6">Band Details</h1>

    <!-- Band Details Section -->
    <div class="bg-white p-6 shadow-md rounded-md">
        <h2 class="text-xl font-semibold mb-4">Naam: {{ $band->name }}</h2>
        <p class="text-lg mb-4"><strong>Genre:</strong> {{ $band->genre }}</p>
        <p class="text-lg mb-4"><strong>Oprichtingsjaar:</strong> {{ $band->founded }}</p>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Albums in dit Band:</h2>
            <ul class="space-y-2">
                @foreach($band->albums as $album)
                    <li class="bg-gray-100 p-3 rounded-md shadow-sm transition duration-200 ease-in-out hover:bg-gray-200 hover:shadow-md">
                        <a href="{{ route('albums.show', $album->id) }}" class="block w-full h-full">
                            📀 {{ $album->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <p class="text-lg mb-4"><strong>Actief Tot:</strong> {{ $band->active_till ?? 'N/A' }}</p>

        <!-- Buttons for Edit or Delete -->
        <div class="mt-6">
            <a href="{{ route('bands.edit', $band->id) }}" 
               class="bg-black text-white px-4 py-2 rounded hover:bg-yellow-500">Bewerken</a>
            
            <form action="{{ route('bands.destroy', $band->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Weet je zeker dat je deze band wilt verwijderen?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                    Verwijderen
                </button>
            </form>
            <!-- Terug knop -->
            <div class="mt-6">
                <a href="{{ route('bands.index') }}" class="mt-60 bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Terug naar lijst</a>
            </div>
        </div>
    </div>
</div>
@endsection
