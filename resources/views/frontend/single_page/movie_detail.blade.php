@php
    $movie = \App\Models\Movies::find($movie->movie_id);
@endphp

<x-frontend.layout>
    @include('frontend.partials._nav')
    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <div class="poster-box">

                            <a href="#popup-poster" data-lightbox="inline"
                                style="background-color:#fff !important;padding:0px;">
                                <img class="card-img img-fluid" src="{{ asset('storage/' . $movie->image) }}"
                                    alt="{{ $movie->title }}" id="product-detail">
                            </a>

                            <a href="https://m.21cineplex.com/gui.schedule.php?sid=&amp;movie_id=22SASV&amp;find_by=2">Buy
                                Ticket</a>
                        </div>
                    </div>

                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <center>
                                <h1 class="h2">{{ $movie->title }}</h1><br>
                            </center>
                            <h3>Movie Details <span>:</span></h3><br>
                            <ul class="desc-movie">
                                <li class="movie_genre">
                                    <span>Genre</span> {{ $movie->genre->name }}
                                </li>

                                <li class="movie_produser">
                                    <span>Duration</span> {{ $movie->duration }}
                                </li>

                                <li class="movie_produser">
                                    <span>Director</span> {{ $movie->director }}
                                </li>

                                <li class="movie_distributor">
                                    <span>Release</span> {{ $movie->release_date }}
                                </li>

                                <li class="movie_cast">
                                    <span>Cast</span> {{ $movie->cast }}
                                </li>
                            </ul>

                            <div class="clearfix"> </div>
                            <ul class="bottom-links-agile">
                                <li><a href="{{ $movie->trailer }}">Watch Trailer</a></li>
                            </ul>

                            <h3>Description <span>:</span></h3><br>
                            <p>{{ $movie->description }}</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->
</x-frontend.layout>
