@props(['movie'])

@php
    $movieSchedule = \App\Models\Movies::find($movie->movie_id);
@endphp

<div class="box">
    <a href="{{ route('movie.show', $movieSchedule->id) }}">
        <div class="img-box px-2">
            <img src="{{ asset('storage/' . $movieSchedule->image) }}" alt="{{ $movieSchedule->title }}">
        </div>
        <div class="detail-box">
            <h6>
                {{ $movieSchedule->genre->name }}
            </h6>
            <h6>
                Rating:
                <span>
                    {{ $movieSchedule->rating }}/5
                </span>
            </h6>
        </div>
        <div class="new">
            <span>
                Rp. {{ $movie->price }}
            </span>
        </div>
    </a>
</div>
