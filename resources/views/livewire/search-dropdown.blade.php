<div class="relative">
    <input
            wire:model="search"
            type="text"
            class="text-gray-800  rounded-full w-64  pl-8 px-4 py-1 focus:outline-none focus:shadow-outline text-sm"
            placeholder="Search">
    <div class="absolute top-0">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search ml-2 mt-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
        </svg>
    </div>
    <div class="absolute w-64 mt-4 bg-gray-800 rounded">
        <div wire:loading>
           Loading...
        </div>
        <ul>
            @foreach($searchResults as $result)
                <li>
                    <a href="{{ route('movies.show', $result['id']) }}" class="block hover:bg-gray-700 px-3 py-3 flex items-center">
                        <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" class="w-8" alt="">
                        <span class="ml-4">{{ $result['title'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

