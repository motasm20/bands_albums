@extends('layouts.app')

@section('content')
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
            <button type="submit" class="w-full bg-blue-500 text-white rounded-lg py-2">Aanmaken</button>
        </div>
    </form>
</div>
@endsection
