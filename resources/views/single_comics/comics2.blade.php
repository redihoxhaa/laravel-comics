@extends('templates.template')

@include('subs.header')

@section('main')
    <main>

        {{-- Blue bar with comic --}}
        <div class="comic-blue-bar">
            <div class="comic cover wrapper">
                <div class="pic-container">
                    <img src="{{ config('comics.2.thumb') }}" alt="DC Banner">
                </div>
            </div>
        </div>
        {{-- /Blue bar with comic --}}


        {{-- Top section with description --}}
        <div class="comic wrapper">
            <div class="advertisement">Advertisement</div>
            <div class="board row">
                <div class="col-9">
                    <h2 class="text-uppercase pb-3 fw-bold">{{ config('comics.2.title') }}</h2>
                    <div class="info-bar row">
                        <div class="col-9 d-flex justify-content-between align-items-center">
                            <div class="price">
                                <span class="currency"> U.S. Price:</span>
                                <span>{{ config('comics.2.price') }}</span>

                            </div>
                            <span class="availability">AVAILABLE</span>
                        </div>
                        <div class="col-3 d-flex align-items-center justify-content-center">
                            <span>Check Availability</span>
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                    </div>

                    <p>{{ config('comics.2.description') }}</p>
                </div>
                <div class="col-3">
                    <div class="pic-container">
                        <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="DC adv">
                    </div>
                </div>
            </div>
        </div>
        {{-- /Top section with description --}}


        {{-- Bottom section with more infos --}}
        <div class="infos-wrapper">
            <div class="comic wrapper">
                <div class="top-infos row">
                    <div class="custom-col">
                        <h4 class="fw-bold">Talent</h4>
                        <div class="row">
                            <div class="col-3">Art by:</div>
                            <div class="col-9 authors">José Luis Garcia-Lopez, Clay Mann, Rafael Albuquerque,
                                Patrick Gleason, Dan Jurgens, Joe Shuster, Neal Adams,
                                Curt Swan, John Cassaday, Olivier Coipel, Jim Lee</div>
                        </div>
                        <div class="row">
                            <div class="col-3">Written by:</div>
                            <div class="col-9 authors">Brad Meltzer, Tom King, Scott Snyder, Geoff Johns,
                                Brian Michael Bendis, Paul Dini, Louise Simonson,
                                Richard Donner, Marv Wolfman, Peter J. Tomasi, Dan
                                Jurgens, Jerry Siegel, Paul Levitz</div>
                        </div>

                    </div>
                    <div class="custom-col">
                        <h4 class="fw-bold">Specs</h4>
                        <div class="row">
                            <div class="col-3">Series:</div>
                            <div class="col-9 text-uppercase"><a href="#">{{ config('comics.2.series') }}</a></div>
                        </div>
                        <div class="row">
                            <div class="col-3">U.S. Price:</div>
                            <div class="col-9">{{ config('comics.2.price') }}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">On Sale Date:</div>
                            <div class="col-9">{{ \Carbon\Carbon::parse(config('comics.2.sale_date'))->format('M d Y') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Bottom section with more infos --}}


        {{-- Bottom links --}}
        <div class="bottom-links row">
            <div class="wrapper">
                <div class="col-3"><a class="d-flex justify-content-between" href="#">
                        <span class="text-uppercase">Digital Comics</span>
                        <div class="pic-container">
                            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}"
                                alt="Digital Comics icon">
                        </div>
                    </a>
                </div>
                <div class="col-3"><a class="d-flex justify-content-between" href="#">
                        <span class="text-uppercase">Shop DC</span>
                        <div class="pic-container">
                            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="Shop DC icon">
                        </div>
                </div>
                </a>
                <div class="col-3"><a class="d-flex justify-content-between" href="#">
                        <span class="text-uppercase">Comic Shop Locator</span>
                        <div class="pic-container">
                            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}"
                                alt="Comic Shop Locator icon">
                        </div>
                </div>
                </a>
                <div class="col-3"><a class="d-flex justify-content-between" href="#">
                        <span class="text-uppercase">Subscriptions</span>
                        <div class="pic-container">
                            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}"
                                alt="Subscriptions icon">
                        </div>
                </div>
                </a>
            </div>
        </div>
        {{-- Bottom links --}}

    </main>
@endsection

@include('subs.footer')
