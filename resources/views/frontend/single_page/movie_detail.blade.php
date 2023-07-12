@php
    $movieSchedule = \App\Models\Movies::find($movie->movie_id);
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
                                <img class="card-img img-fluid" src="{{ asset('storage/' . $movieSchedule->image) }}"
                                    alt="{{ $movieSchedule->title }}" id="product-detail">
                            </a>

                            <a class="w-100 rounded my-2" href="#">Buy
                                Ticket</a>
                        </div>
                    </div>


                </div>

                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <center>
                                <h1 class="h2">{{ $movieSchedule->title }}</h1><br>
                            </center>
                            <ul class="mb-3 movie-schedule d-grid grid-cols-2">
                                <li><span>Starts</span> {{ $movie->starts }}</li>
                                <li><span>Ends</span> {{ $movie->ends }}</li>
                                <li><span>Showing On</span> Cinema
                                    {{ \App\Models\Cinemas::find($movie->cinema_id)->code }}</li>
                                <li><span>Ticket Price</span> Rp. {{ $movie->price }}</li>
                            </ul>

                            <ul class="desc-movie">
                                <li class="movie_genre">
                                    <span>Genre</span> {{ $movieSchedule->genre->name }}
                                </li>

                                <li class="movie_duration">
                                    <span>Duration</span> {{ $movieSchedule->duration }} minutes
                                </li>

                                <li class="movie_produser">
                                    <span>Director</span> {{ $movieSchedule->director }}
                                </li>

                                <li class="movie_distributor">
                                    <span>Release</span> {{ $movieSchedule->release_date }}
                                </li>

                                <li class="movie_cast">
                                    <span>Cast</span> {{ $movieSchedule->cast }}
                                </li>
                            </ul>

                            <div class="clearfix"> </div>
                            <ul class="bottom-links-agile">
                                <li><a href="{{ $movieSchedule->trailer }}">Watch Trailer</a></li>
                            </ul>

                            <h3>Description <span>:</span></h3><br>
                            <p>{{ $movieSchedule->description }}</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->
</x-frontend.layout>
