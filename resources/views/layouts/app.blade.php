<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    <header class="bg-blue-600 p-4 text-white">
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold">@yield('title')</h1>
            <nav>
                <a href="{{ route('bands.index') }}" class="text-white mr-4">Bands</a>
                <a href="{{ route('albums.index') }}" class="text-white mr-4">Albums</a>
                <a href="{{ route('songs.index') }}" class="text-white">Songs</a>
            </nav>
        </div>
    </header>

    <main class="flex-1 container mx-auto p-4">
        @yield('content')
    </main>

    <footer class="bg-gray-800 p-4 text-white text-center">
        <p>&copy; </p>
    </footer>
</body>
</html>
