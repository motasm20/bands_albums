@extends('layouts.app')

@section('title', 'Band Bewerken')
@section('content')
    <!-- Terug knop -->
    <div class="mt-4">
        <a href="{{ route('bands.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">Terug naar lijst</a>
    </div>
    <div class="max-w-md mx-auto bg-white p-6 shadow-md rounded-md">
        <h1 class="text-xl font-bold mb-4">Band bewerken</h1>
        <form action="{{ route('bands.update', $band->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Naam -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Naam:</label>
                <input type="text" id="name" name="name" value="{{ old('name', $band->name) }}" required
                    class="w-full border border-gray-300 rounded px-3 py-2">
            </div>

            <!-- Genre -->
            <div class="mb-4">
                <label for="genre" class="block text-sm font-medium text-gray-700">Genre:</label>
                <input type="text" id="genre" name="genre" value="{{ old('genre', $band->genre) }}" required
                    class="w-full border border-gray-300 rounded px-3 py-2">
            </div>

            <!-- Oprichtingsjaar -->
            <div class="mb-4">
                <label for="founded" class="block text-sm font-medium text-gray-700">Oprichtingsjaar:</label>
                <input type="number" id="founded" name="founded" min="1900" max="{{ date('Y') }}" 
                    value="{{ old('founded', $band->founded) }}" required class="w-full border border-gray-300 rounded px-3 py-2">
            </div>

            <!-- Actief tot -->
            <div class="mb-4">
                <label for="active_till" class="block text-sm font-medium text-gray-700">Actief tot:</label>
                <input type="number" id="active_till" name="active_till" min="1900" max="{{ date('Y') }}" 
                    value="{{ old('active_till', $band->active_till) }}" class="w-full border border-gray-300 rounded px-3 py-2">
            </div>

            <!-- Albums -->
            <label for="albums">Kies albums:</label>
            <select name="albums[]" multiple class="w-full border border-gray-300 rounded px-3 py-2 mb-4">
                @foreach($albums as $album)
                    <option value="{{ $album->id }}" {{ $band->albums->contains($album->id) ? 'selected' : '' }}>
                        {{ $album->name }}
                    </option>
                @endforeach
            </select>
            
            <!-- Opslaan Knop -->
            <div class="text-right">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">
                    Opslaan
                </button>
            </div>
        </form>
    </div>
@endsection
