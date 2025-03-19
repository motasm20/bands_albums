@extends('layouts.app')

@section('title', 'Song Bewerken')

@section('content')
<!-- Terug knop -->
<div class="mt-4">
    <a href="{{ route('songs.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">Terug naar lijst</a>
</div>
<div class="max-w-md mx-auto bg-white p-6 shadow-md rounded-md">
    <h1 class="text-xl font-bold mb-4">Song bewerken</h1>
    <form action="{{ route('songs.update', $song->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Song Naam -->
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Song Naam:</label>
            <input type="text" id="title" name="title" value="{{ old('title', $song->title) }}" required
                class="w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <!-- Zanger -->
        <div class="mb-4">
            <label for="singer" class="block text-sm font-medium text-gray-700">Zanger:</label>
            <input type="text" id="singer" name="singer" value="{{ old('singer', $song->singer) }}" required
                class="w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <!-- Album -->
        <label for="albums">Kies albums:</label>
        <select name="albums[]" multiple class="w-full border border-gray-300 rounded px-3 py-2 mb-4">
            @foreach($albums as $album)
                <option value="{{ $album->id }}" {{ $song->albums->contains($album->id) ? 'selected' : '' }}>
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
