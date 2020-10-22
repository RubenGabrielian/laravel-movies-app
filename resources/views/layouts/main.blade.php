<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie App</title>
    <link rel="stylesheet" href="/css/main.css">
    <livewire:styles />
</head>
<body class="font-sans bg-green-900 text-white">
<nav class="border-b border-green-800">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
        <ul class="flex items-center flex-col md:flex-row">
            <li>
                <a href="{{ route('movies.index') }}">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-film" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0h8v6H4V1zm8 8H4v6h8V9zM1 1h2v2H1V1zm2 3H1v2h2V4zM1 7h2v2H1V7zm2 3H1v2h2v-2zm-2 3h2v2H1v-2zM15 1h-2v2h2V1zm-2 3h2v2h-2V4zm2 3h-2v2h2V7zm-2 3h2v2h-2v-2zm2 3h-2v2h2v-2z"/>
                    </svg>
                </a>
            </li>
            <li class="md:ml-16">
                <a href="{{ route('movies.index') }}" class="hover:text-gray-300">Movies</a>
            </li>
            <li class="md:ml-6">
                <a href="#" class="hover:text-gray-300">TV Shows</a>
            </li>
            <li class="md:ml-6">
                <a href="#" class="hover:text-gray-300">Actors</a>
            </li>
        </ul>
        <div class="flex flex-col md:flex-row items-center">
            <livewire:search-dropdown>
            <div class="md:ml-4 mt-3 md:mt-0">
                <a href="#">
                    <img src="/img/avatar.jpg" class="rounded-full w-8 h-8" alt="">
                </a>
            </div>
        </div>

    </div>
</nav>
@yield('content')
<livewire:scripts />
</body>
</html>
