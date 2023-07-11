@props(['movie'])

@php
    $movie = \App\Models\Movies::find($movie->movie_id);
@endphp

<div class="box">
    <a href="{{ route('movie.show', $movie->id) }}">
        <div class="img-box px-2">
            <img src="{{ asset('storage/' . $movie->image) }}" alt="{{ $movie->title }}">
        </div>
        <div class="detail-box">
            <h6>
                {{ $movie->genre->name }}
            </h6>
            <h6>
                Rating:
                <span>
                    {{ $movie->rating }}/5
                </span>
            </h6>
        </div>
        <div class="new">
            <span>
                TOP MOVIES
            </span>
        </div>
    </a>
</div>
