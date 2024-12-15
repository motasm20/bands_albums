<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Music App')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 p-4 text-white">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold">Music App</h1>
            <nav>
                <a href="{{ route('bands.index') }}" class="text-white mr-4">Bands</a>
                <a href="{{ route('albums.index') }}" class="text-white mr-4">Albums</a>
                <a href="{{ route('songs.index') }}" class="text-white">Songs</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto p-4">
        @yield('content')
    </main>

    <footer class="bg-gray-800 p-4 text-white text-center">
        <p>&copy; 2024 Music App</p>
    </footer>
</body>
</html>
