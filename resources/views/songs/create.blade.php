@extends('layouts.app')
@section('title', 'Nieuwe Song')

@section('content')
<!-- Terug knop -->
<div class="mt-4">
    <a href="{{ route('songs.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">Terug naar lijst</a>
</div>
<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-xl font-bold mb-4">Nieuwe Song Aanmaken</h1>
    <form action="{{ route('songs.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="title" class="block">Song Titel:</label>
            <input type="text" id="title" name="title" required class="w-full border py-1 rounded-lg">
        </div>

        <div>
            <label for="singer" class="block">Zanger:</label>
            <input type="text" id="singer" name="singer" required class="w-full border py-1 rounded-lg">
        </div>

        <div>
            <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-800">Aanmaken</button>
        </div>
    </form>
</div>
@endsection
