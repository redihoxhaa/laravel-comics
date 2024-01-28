@section('header')
    <header>

        {{-- Top bar --}}
        <div class="top-bar">
            <div class="wrapper d-flex justify-content-end">
                <ul class="d-flex text-uppercase">
                    <li>DC POWER™ VISA®</li>
                    <li>Additional DC Sites
                        <i class="fa-solid fa-caret-down"></i>
                    </li>
                </ul>
            </div>
        </div>
        {{-- /Top bar --}}

        {{-- Nav --}}
        <div class="wrapper">
            <div class="logo-pic-container">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo">
            </div>

            {{-- Links --}}
            <ul class="top-nav">
                <li><a href="#">Characters</a></li>
                <li><a href="/comics">Comics</a></li>
                <li><a href="#">Movies</a></li>
                <li><a href="#">TV</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Collectibles</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">Fans</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Shop</a>
                    <i class="fa-solid fa-caret-down"></i>
                </li>
            </ul>
            {{-- /Links --}}

            {{-- Searchbar --}}
            <div class="search-bar">
                <span>Search</span>
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            {{-- /Searchbar --}}

        </div>
        {{-- /Nav --}}

        {{-- Jumbotron --}}
        <div class="jumbotron">
        </div>
        {{-- /Jumbotron --}}

    </header>
@endsection
