@extends('templates.template')

@include('subs.header')

@section('main')
    <main>

        {{-- Call to action section --}}
        <section class="last-comics">
            <h2><a href="/comics">Take a look at the last comics! </a></h2>
        </section>
        {{-- /Call to action section --}}

        {{-- Welcome message --}}
        <div class="home wrapper">
            <h1>Unleash the Extraordinary: Explore the New DC Comics Universe</h1>
            <p>Welcome to the epicenter of extraordinary storytelling and iconic heroes – the all-new DC Comics! Immerse
                yourself in
                a universe where imagination knows no bounds, where legendary characters come to life with every turn of the
                page.
                Explore the rich tapestry of our comic book legacy, where the extraordinary meets the extraordinary.

                Discover the latest adventures of Superman, Batman, Wonder Woman, and a league of unparalleled heroes who
                redefine
                the meaning of justice. Dive into a world of graphic novels, comics, and exclusive content that transcends
                time
                and
                space, capturing the essence of heroic tales that have shaped generations.

                Engage with our vibrant community, connect with fellow fans, and stay up-to-date with the latest news,
                events,
                and
                releases. Whether you're a seasoned comic enthusiast or a newcomer eager to explore, DC Comics invites you
                to
                join
                us on a journey where the extraordinary is just the beginning.

                Embark on an odyssey through our digital realms, where stunning visuals and immersive storytelling collide.
                Unleash
                your inner hero and witness the power of storytelling that transcends the ordinary – because at DC Comics,
                every
                panel tells a story, and every story is a legend in the making.

                Welcome to the new era of DC Comics – where imagination has no limits, and heroes are forever.</p>
        </div>
        {{-- Welcome message --}}


        {{-- Decoration banner --}}
        <div class="pic-container">
            <img src="{{ Vite::asset('resources/img/banner.jpg') }}" alt="DC Banner">
        </div>
        {{-- /Decoration banner --}}


        {{-- More sections --}}
        <div class="home wrapper">

            <section id="welcome">
                <p>Welcome to the epicenter of extraordinary storytelling and iconic heroes – the all-new DC Comics! Immerse
                    yourself in a universe where imagination knows no bounds...</p>
            </section>

            <section id="characters">
                <h2>Legendary Characters</h2>
                <p>Discover the latest adventures of Superman, Batman, Wonder Woman, and a league of unparalleled heroes who
                    redefine the meaning of justice...</p>
            </section>

            <section id="comics">
                <h2>Graphic Novels & Comics</h2>
                <p>Explore the rich tapestry of our comic book legacy, where the extraordinary meets the extraordinary. Dive
                    into a
                    world of graphic novels, comics, and exclusive content that transcends time and space...</p>
            </section>

            <section id="community">
                <h2>Join the Community</h2>
                <p>Engage with our vibrant community, connect with fellow fans, and stay up-to-date with the latest news,
                    events,
                    and releases...</p>
            </section>

            <section id="digital-realms">
                <h2>Digital Realms</h2>
                <p>Embark on an odyssey through our digital realms, where stunning visuals and immersive storytelling
                    collide.
                    Unleash your inner hero and witness the power of storytelling that transcends the ordinary...</p>
            </section>
        </div>
        {{-- /More sections --}}

    </main>
@endsection

@include('subs.bluebar')
@include('subs.footer')
