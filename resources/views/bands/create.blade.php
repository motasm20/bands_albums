@extends('layouts.app')

@section('content')
    <h1>Create a New Band</h1>
    <form action="{{ route('bands.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" required>

        <label for="founded">Founded Year:</label>
        <input type="number" id="founded" name="founded" required>

        <button type="submit">Create Band</button>
    </form>
@endsection
