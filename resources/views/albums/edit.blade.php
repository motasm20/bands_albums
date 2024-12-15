@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto bg-white p-6 shadow-md rounded-md">
        <h1 class="text-xl font-bold mb-4">Bewerk Album</h1>
        <form action="{{ route('albums.update', $album->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Album Naam -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Album Naam:</label>
                <input type="text" id="name" name="name" value="{{ old('name', $album->name) }}" required
                    class="w-full border border-gray-300 rounded px-3 py-2">
            </div>

            <!-- Jaar van Uitgave -->
            <div class="mb-4">
                <label for="year" class="block text-sm font-medium text-gray-700">Jaar van Uitgave:</label>
                <input type="number" id="year" name="year" min="1900" max="{{ date('Y') }}" 
                    value="{{ old('year', $album->year) }}" required class="w-full border border-gray-300 rounded px-3 py-2">
            </div>

            <!-- Verkochte Aantal -->
            <div class="mb-4">
                <label for="times_sold" class="block text-sm font-medium text-gray-700">Verkocht:</label>
                <input type="number" id="times_sold" name="times_sold" value="{{ old('times_sold', $album->times_sold) }}"
                    required class="w-full border border-gray-300 rounded px-3 py-2">
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
