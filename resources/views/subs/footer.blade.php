@section('footer')
    <footer>
        {{-- Top footer --}}
        <div class="top-footer">
            <div class="main wrapper">
                <div class="upper-section wrapper">
                    <div class="column">
                        <ul>
                            <li><a href="#">DC COMICS</a></li>
                            <li><a href="#">Characters</a></li>
                            <li><a href="#">Comics</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">Games</a></li>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Shop DC</a></li>
                            <li><a href="#">Shop DC Collectibles</a></li>
                        </ul>
                    </div>

                    <div class="column">
                        <ul>
                            <li><a href="#">DC</a></li>
                            <li><a href="#">Terms Of Use</a></li>
                            <li><a href="#">Privacy policy (New)</a></li>
                            <li><a href="#">Ad Choices</a></li>
                            <li><a href="#">Advertising</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Subscriptions</a></li>
                            <li><a href="#">Talent Workshops</a></li>
                            <li><a href="#">CPSC Certificates</a></li>
                            <li><a href="#">Ratings</a></li>
                            <li><a href="#">Shop Help</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="column">
                        <ul>
                            <li><a href="#">Sites</a></li>
                            <li><a href="#">DC</a></li>
                            <li><a href="#">MAD Magazine</a></li>
                            <li><a href="#">DC Kids</a></li>
                            <li><a href="#">DC Universe</a></li>
                            <li><a href="#">DC Power Visa</a></li>
                        </ul>
                    </div>
                </div>
                <div class="copyright wrapper">
                    <p class="copyright-disclaimer">All Site Content TM and © 2020 DC Entertainment, unless otherwise <a
                            href="#">noted here</a>. Al rights
                        reserved.<br><a href="#">Cookies Settings</a></p>
                </div>
            </div>
        </div>

        {{-- /Top footer --}}

        {{-- Bottom footer --}}
        <div class="bottom-footer">
            <div class="wrapper">
                <button><a href="#">Sign-up now!</a></button>
                <ul class="follow-us">
                    <li class="call-to-action">Follow Us</li>
                    <li><a href="#">
                            <div class="pic-container"> <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}"
                                    alt="facebook Logo"></div>
                        </a></li>
                    <li><a href="#">
                            <div class="pic-container"> <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}"
                                    alt="twitter Logo"></div>
                        </a></li>
                    <li><a href="#">
                            <div class="pic-container"> <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}"
                                    alt="youtube Logo"></div>
                        </a></li>
                    <li><a href="#">
                            <div class="pic-container"> <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}"
                                    alt="pinterest Logo"></div>
                        </a></li>
                    <li><a href="#">
                            <div class="pic-container"> <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}"
                                    alt="periscope Logo"></div>
                        </a></li>
                </ul>
            </div>
        </div>
        {{-- /Bottom footer --}}
    </footer>
@endsection
