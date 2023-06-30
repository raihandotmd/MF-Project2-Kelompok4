@extends('admin.layouts.app')
@section('content')
    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height justify-content-center">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Movies</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{ route('movies.store') }}" method="POST">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Code</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name-horizontal" class="form-control" name="code"
                                                placeholder="type code..." value="{{ old('code') }}" />
                                        </div>
                                        @error('code')
                                            <div class="alert alert-danger alert-dismissible show fade">
                                                {{ $message }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @enderror
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Title</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name-horizontal" class="form-control" name="title"
                                                placeholder="type title..." value="{{ old('title') }}" />
                                        </div>
                                        @error('title')
                                            <div class="alert alert-danger alert-dismissible show fade">
                                                {{ $message }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @enderror
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Description</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <textarea id="name-horizontal" class="form-control" name="description" placeholder="type desc...">{{ old('description') }}</textarea>
                                        </div>
                                        @error('description')
                                            <div class="alert alert-danger alert-dismissible show fade">
                                                {{ $message }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @enderror
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Genre</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select name="genre_id" id="genre" class="form-select">
                                                @foreach ($genres as $genre)
                                                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('genre_id')
                                                <div class="alert alert-danger alert-dismissible show fade">
                                                    {{ $message }}
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Image</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name-horizontal" class="form-control" name="image"
                                                placeholder="type here..." value="{{ old('image') }}" />
                                        </div>
                                        @error('image')
                                            <div class="alert alert-danger alert-dismissible show fade">
                                                {{ $message }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @enderror
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Trailer</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name-horizontal" class="form-control" name="trailer"
                                                placeholder="type trailer..." value="{{ old('trailer') }}" />
                                        </div>
                                        @error('trailer')
                                            <div class="alert alert-danger alert-dismissible show fade">
                                                {{ $message }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @enderror
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Duration</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name-horizontal" class="form-control" name="duration"
                                                placeholder="type duration..." value="{{ old('duration') }}" />
                                        </div>
                                        @error('duration')
                                            <div class="alert alert-danger alert-dismissible show fade">
                                                {{ $message }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @enderror
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Release Date</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="date" id="name-horizontal" class="form-control"
                                                name="release_date" placeholder="type release date..."
                                                value="{{ old('release_date') }}" />
                                        </div>
                                        @error('release_date')
                                            <div class="alert alert-danger alert-dismissible show fade">
                                                {{ $message }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @enderror
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Director</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name-horizontal" class="form-control"
                                                name="director" placeholder="type director..."
                                                value="{{ old('director') }}" />
                                        </div>
                                        @error('director')
                                            <div class="alert alert-danger alert-dismissible show fade">
                                                {{ $message }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @enderror
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Cast</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name-horizontal" class="form-control"
                                                name="cast" placeholder="type cast..." value="{{ old('cast') }}" />
                                        </div>
                                        @error('cast')
                                            <div class="alert alert-danger alert-dismissible show fade">
                                                {{ $message }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @enderror
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Country</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name-horizontal" class="form-control"
                                                name="country" placeholder="type country..."
                                                value="{{ old('country') }}" />
                                        </div>
                                        @error('country')
                                            <div class="alert alert-danger alert-dismissible show fade">
                                                {{ $message }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @enderror
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Language</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name-horizontal" class="form-control"
                                                name="language" placeholder="type language..."
                                                value="{{ old('language') }}" />
                                        </div>
                                        @error('language')
                                            <div class="alert alert-danger alert-dismissible show fade">
                                                {{ $message }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @enderror
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Age Limit</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name-horizontal" class="form-control"
                                                name="age_limit" placeholder="type age limit..."
                                                value="{{ old('age_limit') }}" />
                                        </div>
                                        @error('age_limit')
                                            <div class="alert alert-danger alert-dismissible show fade">
                                                {{ $message }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @enderror
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <a href="{{ route('movies') }}" class="btn btn-danger">Back</a>
                                            <button type="submit" class="btn btn-primary me-1 mb-1">
                                                Create
                                            </button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                                Reset
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic Horizontal form layout section end -->
@endsection
