@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-2xl font-bold mb-4">Bands</h1>
    <a href="{{ route('bands.create') }}" class="btn btn-primary mb-4">Nieuwe Band Toevoegen</a>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th>Naam</th>
                <th>Genre</th>
                <th>Oprichtingsjaar</th>
                <th>Actief Tot</th>
                <th>Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bands as $band)
            <tr>
                <td>{{ $band->name }}</td>
                <td>{{ $band->genre }}</td>
                <td>{{ $band->founded }}</td>
                <td>{{ $band->active_till }}</td>
                <td>
                    <a href="{{ route('bands.edit', $band->id) }}" class="btn btn-warning">Bewerken</a>
                    <form action="{{ route('bands.destroy', $band->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Verwijderen</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
