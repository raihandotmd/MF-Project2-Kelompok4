@extends('admin.layouts.app')
@section('content')
    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height justify-content-center">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Movie Schedule #{{ $movie_schedule->id }}</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{ route('movie_schedule.update') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Movie Code</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select name="movie_id" class="form-select">

                                                @foreach ($movies as $movie)
                                                    @php $selected = ($movie_schedule->movie_id == $movie->id) ? 'selected' : ''; @endphp
                                                    <option value="{{ $movie->id }}" {{ $selected }}>
                                                        {{ $movie->code }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Cinema Code</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select name="cinema_id" class="form-select">
                                                @foreach ($cinemas as $cinema)
                                                    @if ($movie_schedule->cinema_id == $cinema->id)
                                                        <option value="{{ $cinema->id }}" selected>{{ $cinema->code }}
                                                        </option>
                                                    @endif

                                                    <option value="{{ $cinema->id }}">{{ $cinema->code }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Starts</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="datetime-local" id="name-horizontal" class="form-control"
                                                name="starts" placeholder="type.." value="{{ $movie_schedule->starts }}" />
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Ends</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="datetime-local" id="name-horizontal" class="form-control"
                                                name="ends" placeholder="type.." value="{{ $movie_schedule->ends }}" />
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Price</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="name-horizontal" class="form-control" name="price"
                                                placeholder="type.." value="{{ $movie_schedule->price }}" />
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <input type="hidden" name="idedit" value="{{ $movie_schedule->id }}" />
                                            <a href="{{ route('movie_schedule') }}"
                                                class="btn btn-danger me-1 mb-1">Cancel</a>
                                            <button type="submit" class="btn btn-primary me-1 mb-1">
                                                Save
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
