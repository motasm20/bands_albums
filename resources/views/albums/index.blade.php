@extends('layouts.app')

@section('title', 'Albums')

@section('content')
<div class="container mx-auto">
    <h2 class="text-3xl font-bold mb-4">Albums</h2>
    <a href="{{ route('albums.create') }}" class="bg-blue-500 text-white p-2 rounded">Nieuw Album Toevoegen</a>
    <table class="w-full mt-4 table-auto">
        <thead>
            <tr>
                <th class="border px-4 py-2">Albumnaam</th>
                <th class="border px-4 py-2">Jaar van Uitgave</th>
                <th class="border px-4 py-2">verkocht</th>
                <th class="border px-4 py-2">Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($albums as $album)
                <tr>
                    <td class="border px-4 py-2">{{ $album->name }}</td>
                    <td class="border px-4 py-2">{{ $album->year }}</td>
                    <td class="border px-4 py-2">{{ $album->times_sold }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('albums.edit', $album->id) }}" class="text-blue-500">Bewerken</a>
                        <form action="{{ route('albums.destroy', $album->id) }}" method="POST" style="display:inline;">
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
