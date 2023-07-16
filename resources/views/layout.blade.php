<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round|Material+Icons+Sharp|Material+Icons+Two+Tone" rel="stylesheet">
    <title>Gofuku Lunch</title>
    <style>
        body {
            /* padding-top: 80px; */
            font-family: 'Noto Sans JP', sans-serif;
        }
    </style>
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="navbar bg-red-200">
        <div class="flex-1">
            <div class="btn normal-case text-xl">
                <span class="material-icons text-gray-500">home</span>
                <h2 class="text-xl">GofukuLunch</h2>
            </div>
        </div>

        {{-- Mobile menu btn --}}
        <div class="flex lg:hidden">
            <button class="btn">
                <span class="material-icons">menu</span>
            </button>
        </div>

        {{-- Desctop menu --}}
        <ul class="menu menu-horizontal hidden lg:flex lg:items-center bg-base-200 rounded-box text-base">
            <li><a href="#">AAAA</a></li>
            <li><a href="#">BBBB</a></li>
            <li><a href="#">CCCC</a></li>
        </ul>
    </nav>

    @yield('content')
</body>
</html>
