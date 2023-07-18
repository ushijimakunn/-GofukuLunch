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
    <header class="navbar bg-red-200">

        <div class="flex-1">
            <div class="btn normal-case text-xl">
                <span class="material-icons text-gray-500">home</span>
                <a href={{ route('shop.list') }} class="text-xl">GofukuLunch</a>
            </div>
        </div>

        {{-- Mobile menu btn --}}
        <div class="flex lg:hidden">
            <button class="btn" id='menu_btn'>
                <span class="material-icons">
                    menu
                </span>
            </button>
        </div>
        <ul class="menu absolute p-0 right-0 top-16 w-0 duration-500 bg-base-200 rounded-box text-base" id='main_nav'>
            <li><a href={{ route('shop.list') }}>お店一覧</a></li>
            <li><a href={{ route('shop.new') }}>新規投稿</a></li>
        </ul>

        {{-- Desctop menu --}}
        <ul class="menu menu-horizontal hidden lg:flex lg:items-center bg-base-200 rounded-box text-base">
            <li><a href={{ route('shop.list') }}>お店一覧</a></li>
            <li><a href={{ route('shop.new') }}>新規投稿</a></li>
        </ul>
    </header>

    @yield('content')

    <footer>

    </footer>

    <script src="{{ asset('js/main_nav.js') }}"></script>
</body>
</html>
