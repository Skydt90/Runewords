<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <title>Runewords</title>
</head>
<body class="bg-gray-900 text-white">
    <header class="border-b border-gray-800">
        <nav class="mx-auto flex flex-col items-center px-4 py-6">
            <ul class="flex ml-0 lg:ml-16 space-x-8 mt-6 lg:mt-0">
                <li><a href="{{ route('runeword.calculator') }}" class="hover:text-gray-400">Runeword Calculator</a></li>
                <li><a href="{{ route('runeword.index') }}" class="hover:text-gray-400">Runewords</a></li>
                <li><a href="{{ route('backup') }}" class="hover:text-gray-400">Backup local files</a></li>
                <li><a href="{{ route('rune.index') }}" class="hover:text-gray-400">Runes</a></li>
                <li><a href="#" class="hover:text-gray-400">Rune Recipes</a></li>
            </ul>
        </nav>
        <div class="backup-message flex flex-col items-center">
            @if (Session::has('success'))
                <h2 class="success text-green-600 font-semibold pb-4">
                    {{ Session::get('success') }}
                </h2>
            @elseif ($errors->any())
                <h2 class="failure text-red-600 font-semibold pb-4">
                    {{ $errors->first() }}
                </h2>
            @endif
        </div>
    </header>
    <div id="app" class="container mx-auto px-4 w-full my-10">
        @yield('content')
    </div>
</body>
</html>
