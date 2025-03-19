@extends('layouts.app')

@section('title', 'Songs')

@section('content')
<div class="max-w-7xl mx-auto py-6">
    <h1 class="text-3xl font-bold mb-6">Lijst van Songs</h1>

    <!-- Nieuwe song toevoegen -->
    <a href="{{ route('songs.create') }}" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Nieuwe Song Aanmaken</a>
    
    <table class="w-full mt-4 table-auto">
        <thead>
            <tr class="bg-gray-100">
                <th class="border py-2">Naam</th>
                <th class="border py-2">Zanger</th>
                <th class="border py-2">Album</th>
                <th class="border py-2">Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($songs as $song)
                <tr>
                    <td class="border py-2">{{ $song->title }}</td>
                    <td class="border py-2">{{ $song->singer }}</td>
                    <td class="border py-2">
                        @foreach($song->albums as $album)
                            <p>{{ $album->name }}</p>
                        @endforeach
                    </td>

                    <td class="border py-2">
                        <!-- Details knop -->
                        <a href="{{ route('songs.show', $song->id) }}" 
                           class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Details</a>
                        
                        <!-- Bewerken knop -->
                        <a href="{{ route('songs.edit', $song->id) }}" 
                           class="bg-black text-white px-3 py-1 rounded hover:bg-yellow-500">Bewerken</a>
    
                        <!-- Verwijderen knop -->
                        <form action="{{ route('songs.destroy', $song->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Weet je zeker dat je deze song wilt verwijderen?')">
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
