@extends('layouts.app')

@section('title', 'Songs')

@section('content')
<div class="container mx-auto">
    <h2 class="text-3xl font-bold mb-4">Songs</h2>
    <a href="{{ route('songs.create') }}" class="bg-blue-500 text-white p-2 rounded">Nieuwe Song Toevoegen</a>
    <table class="w-full mt-4 table-auto">
        <thead>
            <tr>
                <th class="border px-4 py-2">Naam</th>
                <th class="border px-4 py-2">Zanger</th>
                <th class="border px-4 py-2">Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($songs as $song)
                <tr>
                    <td class="border px-4 py-2">{{ $song->title }}</td>
                    
                    <td class="border px-4 py-2">{{ $song->singer }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('songs.edit', $song->id) }}" class="text-blue-500">Bewerken</a>
                        <form action="{{ route('songs.destroy', $song->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Verwijderen</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
