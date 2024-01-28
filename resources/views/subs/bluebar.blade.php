@section('bluebar')
    {{-- Blue bar --}}
    <section class="blue-links">
        <div class="wrapper">
            <ul class="blue-list">
                <li>
                    <a href="#">
                        <div class="pic-container">
                            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}"
                                alt="Digital Comics Logo">
                        </div>
                        <span>Digital Comics</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="pic-container">
                            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}"
                                alt="DC Merchandise Logo">
                        </div>
                        <span>DC Merchandise</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="pic-container">
                            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}"
                                alt="Subscription Logo">
                        </div>
                        <span>Subscription</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="pic-container">
                            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}"
                                alt="Comic Shop Locator Logo">
                        </div>
                        <span>Comic Shop Locator</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="pic-container">
                            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="DC Power Visa< Logo">
                        </div>
                        <span>DC Power Visa</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    {{-- /Blue bar --}}
@endsection
