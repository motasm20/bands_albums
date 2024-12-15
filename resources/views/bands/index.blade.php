@extends('layouts.app')

@section('title', 'Bands')

@section('content')
<div class="container mx-auto">
    <h2 class="text-3xl font-bold mb-4">Bands</h2>
    <a href="{{ route('bands.create') }}" class="bg-blue-500 text-white p-2 rounded">Nieuwe Band Toevoegen</a>
    <table class="w-full mt-4 table-auto">
        <thead>
            <tr>
                <th class="border px-4 py-2">Naam</th>
                <th class="border px-4 py-2">Genre</th>
                <th class="border px-4 py-2">Oprichtingsjaar</th>
                <th class="border px-4 py-2">Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bands as $band)
                <tr>
                    <td class="border px-4 py-2">{{ $band->name }}</td>
                    <td class="border px-4 py-2">{{ $band->genre }}</td>
                    <td class="border px-4 py-2">{{ $band->founded }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('bands.edit', $band->id) }}" class="text-blue-500">Bewerken</a>
                        <form action="{{ route('bands.destroy', $band->id) }}" method="POST" style="display:inline;">
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
