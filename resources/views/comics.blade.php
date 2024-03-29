@extends('templates.template')

@include('subs.header')

@section('main')
    <main class="comics-main">
        {{-- Comics List --}}
        <div class="wrapper">
            <h3>Current Series</h3>

            <div class="comics wrapper">
                <ul class="products">
                    @foreach (config('comics') as $index => $comic)
                        <li>
                            <div class="pic-container">
                                <a href="/comics-{{ $index }}"> <img src="{{ $comic['thumb'] }}"
                                        alt="{{ $comic['title'] }}"></a>
                            </div>
                            <a class="comic-title" href="/comics-{{ $index }}">>
                                <h5>{{ $comic['title'] }}</h5>
                            </a>
                        </li>
                    @endforeach

                </ul>
                <button><a href="#">Load More</a></button>
            </div>
        </div>
        {{-- /Comics List --}}
    </main>
@endsection

@include('subs.bluebar')

@include('subs.footer')
