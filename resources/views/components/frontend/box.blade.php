@props(['movie'])

<div class="box">
    <a href="">
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
