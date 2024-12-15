@extends('layouts.app')

@section('title', 'Bands')

@section('content')
<div class="max-w-7xl mx-auto py-6">
    <h1 class="text-3xl font-bold mb-6">Lijst van Bands</h1>
    <!-- Nieuwe band toevoegen -->
    <a href="{{ route('bands.create') }}" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Nieuwe Band Toevoegen</a>
    
    <table class="w-full mt-4 table-auto">
        <thead>
            <tr class="bg-gray-100">
                <th class="border py-2">Naam</th>
                <th class="border py-2">Genre</th>
                <th class="border py-2">Oprichtingsjaar</th>
                <th class="border py-2">Actief Tot</th>
                <th class="border py-2">Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bands as $band)
                <tr>
                    <td class="border py-2">{{ $band->name }}</td>
                    <td class="border py-2">{{ $band->genre }}</td>
                    <td class="border py-2">{{ $band->founded }}</td>
                    <td class="border py-2">{{ $band->active_till ?? 'N/A' }}</td>
                    <td class="border py-2">
                        <!-- Details knop -->
                        <a href="{{ route('bands.show', $band->id) }}" 
                           class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Details</a>
                        
                        <!-- Bewerken knop -->
                        <a href="{{ route('bands.edit', $band->id) }}" 
                           class="bg-black text-white px-3 py-1 rounded hover:bg-yellow-500">Bewerken</a>
    
                        <!-- Verwijderen knop -->
                        <form action="{{ route('bands.destroy', $band->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Weet je zeker dat je deze band wilt verwijderen?')">
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
