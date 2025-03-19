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

        <!-- Albums -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        @foreach($albums as $album)
            <label class="flex items-center space-x-2 bg-gray-100 p-3 rounded-md shadow-sm cursor-pointer transition duration-200 ease-in-out hover:bg-gray-200">
                <input type="checkbox" name="albums[]" value="{{ $album->id }}" 
                    class="w-5 h-5 text-blue-500 rounded border-gray-300 focus:ring-blue-400"
                    {{ $song->albums->contains($album->id) ? 'checked' : '' }}>
                <span class="text-gray-700 font-medium">{{ $album->name }}</span>
            </label>
        @endforeach
        </div>

        <!-- Opslaan Knop -->
        <div class="text-right">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">
                Opslaan
            </button>
        </div>
    </form>
</div>
@endsection
