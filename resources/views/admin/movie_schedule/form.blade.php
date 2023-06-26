@extends('admin.layouts.app')
@section('content')
    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height justify-content-center">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Movie Schedule</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{ route('movie_schedule.store') }}" method="POST">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Movie Code</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select name="movie_id" class="form-select">
                                                @foreach ($movies as $movie)
                                                    <option value="{{ $movie->id }}">{{ $movie->code }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Cinema Code</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select name="cinema_id" class="form-select">
                                                @foreach ($cinemas as $cinema)
                                                    <option value="{{ $cinema->id }}">{{ $cinema->code }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Starts</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="datetime-local" id="name-horizontal" class="form-control"
                                                name="starts" placeholder="type.." />
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Ends</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="datetime-local" id="name-horizontal" class="form-control"
                                                name="ends" placeholder="type.." />
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Price</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="name-horizontal" class="form-control" name="price"
                                                placeholder="type.." />
                                        </div>
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
