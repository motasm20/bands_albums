@extends('layouts.app')

@section('title', 'Albums')

@section('content')
<div class="max-w-7xl mx-auto py-6 ">
    <h1 class="text-3xl font-bold mb-6">Lijst van Albums</h1>
    <!-- Nieuw album toevoegen -->
    <a href="{{ route('albums.create') }}" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Nieuw Album Toevoegen</a>
    <table class="w-full mt-4 table-auto">
        <thead>
            <tr class="bg-gray-100">
                <th class="border py-2">Album naam</th>
                <th class="border py-2">Jaar van Uitgave</th>
                <th class="border py-2">Verkocht</th>
                <th class="border py-2">Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($albums as $album)
                <tr>
                    <td class="border  py-2">{{ $album->name }}</td>
                    <td class="border  py-2">{{ $album->year }}</td>
                    <td class="border  py-2">{{ $album->times_sold }}</td>
                    <td class="border  py-2">
                        <!-- Details knop -->
                        <a href="{{ route('albums.show', $album->id) }}" 
                           class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Details</a>
                        
                        <!-- Bewerken knop -->
                        <a href="{{ route('albums.edit', $album->id) }}" 
                           class="bg-black text-white px-3 py-1 rounded hover:bg-yellow-500">
                            Bewerken
                        </a>
    
                        <!-- Verwijderen knop -->
                        <form action="{{ route('albums.destroy', $album->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Weet je zeker dat je dit album wilt verwijderen?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                Verwijderen
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
