@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-6 px-4">
        <h1 class="text-2xl font-bold mb-6">Lijst van Bands</h1>

        <!-- Nieuwe band toevoegen -->
        <div class="mb-4">
            <a href="{{ route('bands.create') }}" 
               class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">
                Nieuwe Band Toevoegen
            </a>
        </div>

        <!-- Bands Tabel -->
        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse border border-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 px-4 py-2 text-left">Naam</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Genre</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Oprichtingsjaar</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Actief Tot</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Acties</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($bands as $band)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $band->name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $band->genre }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $band->founded }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $band->active_till ?? 'N/A' }}</td>
                            <td class="border border-gray-300 px-4 py-2 flex space-x-2">
                                <!-- Bewerken knop -->
                                <a href="{{ route('bands.edit', $band->id) }}" 
                                   class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">
                                    Bewerken
                                </a>

                                <!-- Verwijderen knop -->
                                <form action="{{ route('bands.destroy', $band->id) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je deze band wilt verwijderen?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                        Verwijderen
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-4 text-gray-500">Geen bands gevonden.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
