@extends('layouts.app')

@section('title', 'Nieuw Album')

@section('content')
<!-- Terug knop -->
<div class="mt-4">
    <a href="{{ route('albums.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">Terug naar lijst</a>
</div>
<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-xl font-bold mb-4">Nieuw Album Aanmaken</h1>
    <form action="{{ route('albums.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="block">Album Naam:</label>
            <input type="text" id="name" name="name" required class="w-full border py-1 rounded-lg">
        </div>

        <div>
            <label for="year" class="block">Jaar van Uitgave:</label>
            <input type="number" id="year" name="year" min="1900" max="{{ date('Y') }}" required class="w-full border py-1 rounded-lg">
        </div>

        <div>
            <label for="times_sold" class="block">Aantal Verkocht:</label>
            <input type="number" id="times_sold" name="times_sold" min="0" required class="w-full border py-1 rounded-lg">
        </div>
        
        <div>
            <label for="band_id" class="block">Band:</label>

            <select id="band_id" name="band_id" required class="w-full border py-1 rounded-lg">
            <option value="">-- Kies een band --</option>
                @foreach ($bands as $band)
                    <option value="{{ $band->id }}">{{ $band->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-800">Aanmaken</button>
        </div>
    </form>
</div>
@endsection
