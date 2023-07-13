<x-frontend.layout>
    @include('frontend.partials.hero._hero')

    <section class="d-md-flex flex-md-column flex-xl-row justify-content-between xl:my-24" id="now-playing">
        <!--/top-movies-->
        <section class="shop_section layout_padding p-5">
            <div class="container">
                <div class="heading_container heading_center">
                    <h1 class="agile_w3_title"> Now <span> Playing </span> </h1>
                </div>
                <div class="d-grid gap-10 grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                    @foreach ($movies as $movie)
                        <div>
                            <x-frontend.movie_box :movie="$movie" />
                        </div>
                    @endforeach
                </div>
        </section>
        <section class="player-text d-flex flex-column align-items-center align-self-center featured_movie"
            style="padding: 5rem">
            <div class="heading_container heading_center mb-4">
                <h1 class="agile_w3_title text-white"> Featured <span> Movies </span> </h1>
            </div>
            <div class="container d-flex flex-column align-items-center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/cqGjhVJWtEg"
                    title="YouTube video player" frameborder="0" class="overflow-x-scroll"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    style=" width: 100%;
                    aspect-ratio: 16/9;"></iframe>
                <div class="player-text two w-auto">
                    <p class="fexi_header pb-0">Spider-Man: Across the Spider-Verse</p>
                    <p class="fexi_header_para mb-4">
                        Miles Morales catapults across the Multiverse, where he encounters a team of Spider-People
                        charged with protecting its very existence. When the heroes clash on how to handle a new threat,
                        Miles must redefine what it means to be a hero.
                    </p>
                    <p class="fexi_header_para">
                        <span>Release On<label>:</label> </span>
                        May 31,
                        2023
                    </p>
                    <p class="fexi_header_para">
                        <span>Genres<label>:</label> </span>
                        <a href="genre.html">Animation</a> |
                        <a href="genre.html">Action</a> |
                        <a href="genre.html">Adventure</a>
                    </p>
                    <p class="fexi_header_para fexi_header_para1 d-flex"><span>Star
                            Rating<label>:</label></span>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg></a>
                    </p>
                </div>
            </div>

        </section>

    </section>

    <!--//top-movies-->
    <!-- end shop section -->

    <!-- about section -->

    <section class="about_section layout_padding py-10" id="about-us"><br><br>
        <div class="container">
            <div class="d-lg-flex align-items-center flex-sm-column flex-lg-row">
                <div class="col-md col-lg-5 ">
                    <div class="img-box">
                        <img src="assets/images/bioskop.png" alt="">
                    </div>
                </div>
                <div class="col-md col-lg-7">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2 class="text-4xl">
                                About Us
                            </h2>
                        </div>
                        <p class="text-2xl">
                            MoFlix, founded in Mexico in 1971, has grown to be the second largest cinema chain
                            worldwide, serving more than 338 million audience members annually across 691 cinema
                            complexes in 17 countries. MoFlix, a part of this network, was the first to introduce the
                            concept of luxury cinema in 1999. Committed to offering the best entertainment experience,
                            it supports its mission through the efforts of over 39,185 employees globally.
                        </p>
                    </div>
                </div>
            </div>
        </div><br><br>
    </section>

    <!-- end about section -->

    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>COMING SOON IN CINEMAS</h2>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="https://www.youtube.com/watch?v=avz06PDqDbM"><i
                                                        class="fa-solid fa-play"></i></a></li>

                                        </ul>
                                    </div>
                                    <img src="assets/images/mission.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>MISSION IMPOSSIBLE</h4>

                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>

                                            <li><a href="https://www.youtube.com/watch?v=jzQn0-WH4WM"><i
                                                        class="fa-solid fa-play"></i></a></li>

                                        </ul>
                                    </div>
                                    <img src="assets/images/trailer.webp" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>RETRIBUTION</h4>

                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>

                                            <li><a href="https://www.youtube.com/watch?v=DhlaBO-SwVE"><i
                                                        class="fa-solid fa-play"></i></a></li>

                                        </ul>
                                    </div>
                                    <img src="assets/images/trailer.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>EXPENDABLES 3</h4>

                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>

                                            <li><a href="https://www.youtube.com/watch?v=zL2BtTdIuLI"><i
                                                        class="fa-solid fa-play"></i></a></li>

                                        </ul>
                                    </div>
                                    <img src="assets/images/trailer_2.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Aquaman 2 And The Lost Kingdom Teaser </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- feature section -->

    <section class="feature_section layout_padding mt-5">
        <div class="container">
            <div class="heading_container">
                <h2 class="gt-teks">
                    Facility
                </h2>
                <p class="text-2xl w-75">
                    Modern cinemas usually offer various facilities to enhance the movie viewing experience for
                    viewers.
                    Here are some of the facilities commonly found in cinemas
                </p>
            </div>
            <div class="d-grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 mt-8">
                <div class="box m-0">
                    <div class="img-box text-7xl">
                        <i class="fa-solid fa-video"></i>

                    </div>
                    <div class="detail-box">
                        <h5>
                            Widescreen
                        </h5>
                        <p>
                            Cinemas are equipped with large screens that present high-resolution movie images.
                            These
                            screens are designed to provide an immersive, cinematic experience.
                        </p>

                    </div>
                </div>
                <div class="box m-0">
                    <div class="img-box text-7xl">
                        <i class="fa-solid fa-volume-high"></i>
                    </div>
                    <div class="detail-box">
                        <h5>
                            Audio System
                        </h5>
                        <p>
                            Cinemas are equipped with high-quality audio systems, such as Dolby Atmos or other
                            surround
                            sound systems. This allows viewers to enjoy clear and immersive sound effects during
                            movie
                            viewing.
                        </p>

                    </div>
                </div>
                <div class="box m-0">
                    <div class="img-box text-7xl">
                        <i class="fa-solid fa-couch"></i>
                    </div>
                    <div class="detail-box">
                        <h5>
                            Comfortable Seating
                        </h5>
                        <p>
                            Modern cinemas are usually equipped with comfortable seats. Some theaters even offer
                            reclining seats or VIP seats for more space and extra comfort.
                        </p>

                    </div>
                </div>
                <div class="box m-0">
                    <div class="img-box text-7xl">
                        <i class="fa fa-cutlery" aria-hidden="true"></i>

                    </div>
                    <div class="detail-box">
                        <h5>
                            Food Court/Cafe
                        </h5>
                        <p>
                            Cinemas often have a food and drink area located within their complex. Viewers can
                            purchase
                            snacks, drinks or a full meal before or after the movie.
                        </p>

                    </div>
                </div>
                <div class="box m-0">
                    <div class="img-box text-7xl">
                        <i class="fas fa-toilet"></i>
                    </div>
                    <div class="detail-box">
                        <h5>
                            WC and Public Facilities
                        </h5>
                        <p>
                            Cinemas provide toilet facilities and other public facilities such as smoking areas,
                            nursing
                            rooms, and accessibility for persons with disabilities.
                        </p>

                    </div>
                </div>
                <div class="box m-0">
                    <div class="img-box text-7xl">
                        <i class="fa-solid fa-cookie-bite"></i>
                    </div>
                    <div class="detail-box">
                        <h5>
                            Snack Bar
                        </h5>
                        <p>
                            In cinemas, there is usually a special counter that sells snacks such as popcorn,
                            candy,
                            chips and soft drinks. This snack is a popular choice to enjoy during a movie.
                        </p>

                    </div>
                </div>
                <div class="box m-0">
                    <div class="img-box text-7xl">
                        <i class="fa-solid fa-square-parking"></i>
                    </div>
                    <div class="detail-box">
                        <h5>
                            Parking lot
                        </h5>
                        <p>
                            Cinemas often have sufficient parking facilities for spectator vehicles. This makes
                            it
                            easier for the audience to find a safe parking space close to the cinema.
                        </p>

                    </div>
                </div>
                <div class="box m-0 ">
                    <div class="img-box text-7xl">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <div class="detail-box">
                        <h5>
                            Waiting Area
                        </h5>
                        <p>
                            There is usually a comfortable waiting area in theaters, where audience members can
                            sit
                            back
                            and relax before the movie starts. Some cinemas also offer a waiting room equipped
                            with
                            a
                            play area or billiard room.
                        </p>

                    </div>
                </div>
            </div>


        </div>
    </section>

    <!-- end feature section -->
    <section class="chocolate_section my-5 p-5" id="promo">
        <div class="container">
            <div class="heading_container">
                <h1 class="gt-teks">PROMO</h1>
                <p class="text-3xl w-75">
                    We Have Many available Promo waiting for you to enjoy it!
                </p>
            </div>
        </div>
        <div class="container">
            <div class="chocolate_container align-items-center pb-3 flex-wrap justify-content-center">
                <div class="box">
                    <div class="img-box h-auto">
                        <img src="assets/images/promo.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h6>
                            <span>Promo</span> Spesial Bulan Ini
                        </h6>
                        <h5>
                            $5.0
                        </h5>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box h-auto">
                        <img src="assets/images/promo_2.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h6>
                            <span>Promo</span> Khusus Hari Senin
                        </h6>
                        <h5>
                            $5.0
                        </h5>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box h-auto">
                        <img src="assets/images/promo_3.jpeg" alt="">
                    </div>
                    <div class="detail-box">
                        <h6>
                            <span>Promo</span> Awal Bulan
                        </h6>
                        <h5>
                            $5.0
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section><br>

    <br><br>
    <section class="hot_section layout_padding">
        <div class="container">
            <div class="heading_container align-items-center">
                <h3 class="gt-teks">
                    Payment
                </h3>
                <h1>
                    payments made easier
                </h1>
                <hr>
            </div>
            <div class="all-payments">
                <img class="mx-auto" src="{{ asset('assets/images/payments.png') }}" alt="all payments">
            </div>
        </div>

    </section>

    <div class="container-xxl py-5" id="team">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">

                <h1 class="gt-teks mb-5 ">Our Team</h1>
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img src="{{ asset('assets/images/team-nabil.jpg') }}" class="w-100" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href="https://github.com/nabilrobbani84">
                                    <i class="fa fa-github" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-square mx-1"
                                    href="https://www.linkedin.com/in/nabil-robbani-366a30251/">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>

                                </a>
                                <a class="btn btn-square mx-1" href="https://www.instagram.com/billrbbn_/">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>

                                </a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Nabil Robbani</h5>
                            <small>Frontend Dev</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img src="{{ asset('assets/images/team-raihan.png') }}" class="w-100" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href="https://github.com/notRaihan">
                                    <i class="fa fa-github fa-lg" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-square mx-1" href="https://www.linkedin.com/in/notraihan/">
                                    <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i>

                                </a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Muhammad Raihan</h5>
                            <small>Fullstack Dev</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img src="{{ asset('assets/images/team-soulthan.jpg') }}" class="w-100" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href="https://github.com/soulthanfb">
                                    <i class="fa fa-github" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-square mx-1"
                                    href="https://www.linkedin.com/in/soulthan-fadhlillah-bagus/">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>

                                </a>
                                <a class="btn btn-square mx-1" href="https://www.instagram.com/soulthanfb/">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>

                                </a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Sulthan</h5>
                            <small>Backend Dev</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img src="{{ asset('assets/images/team-iky.jpg') }}" class="w-100" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1"
                                    href="https://www.linkedin.com/in/rizki-hidayat-nasution-585425253/">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>

                                </a>
                                <a class="btn btn-square mx-1"
                                    href="https://instagram.com/ikyy_h05?igshid=ZDc4ODBmNjlmNQ==">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>

                                </a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Iky</h5>
                            <small>Backend Dev</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-frontend.layout>
