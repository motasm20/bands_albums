@extends('layouts.app')

@section('title', 'Nieuwe Band')

@section('content')
<!-- Terug knop -->
<div class="mt-4">
    <a href="{{ route('bands.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">Terug naar lijst</a>
</div>
<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-xl font-bold mb-4">Nieuwe Band Aanmaken</h1>
    <form action="{{ route('bands.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="block">Naam:</label>
            <input type="text" id="name" name="name" required class="w-full border py-1 rounded-lg">
        </div>

        <div>
            <label for="genre" class="block">Genre:</label>
            <input type="text" id="genre" name="genre" required class="w-full border py-1 rounded-lg">
        </div>

        <div>
            <label for="founded" class="block">Oprichtingsjaar:</label>
            <input type="number" id="founded" name="founded" min="1900" max="{{ date('Y') }}" required class="w-full border py-1 rounded-lg">
        </div>
        <div>
            <label for="active_till" class="block">Actief Tot:</label>
            <input type="number" id="active_till" name="active_till" min="1900" max="{{ date('Y') }}" class="w-full border py-1 rounded-lg">
        </div>

        <div>
            <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-800">Aanmaken</button>
        </div>
    </form>
</div>
@endsection
