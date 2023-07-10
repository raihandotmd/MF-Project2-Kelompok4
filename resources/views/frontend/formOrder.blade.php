@extends('layouts.app')
@section('content')
<!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height justify-content-center">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ticket Order</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{ route('movie_order.store') }}" method="POST">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Movie Schedule</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select name="movie_schedule" id="movie_schedule" class="form-select">
                                                @foreach ($movies_schedule as $movie_schedule)
                                                    <option value="{{ $movie_schedule->id }}">{{ $movie_schedule->id }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">User</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select name="user_id" id="user" class="form-select">
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Seat</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name-horizontal"
                                                class="form-control @error('seat') is-invalid @enderror" name="seat"
                                                placeholder="type Seat..." value="{{ old('seat') }}" />
                                            @error('seat')
                                                <div class="alert alert-danger alert-dismissible show fade mt-2">
                                                    {{ $message }}    1
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">ticket code</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name-horizontal"
                                                class="form-control @error('ticket_code') is-invalid @enderror"
                                                name="ticket_code" placeholder="type ticket code..."
                                                value="{{ old('ticket_code') }}" />
                                            @error('ticket_code')
                                                <div class="alert alert-danger alert-dismissible show fade mt-2">
                                                    {{ $message }}
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            @enderror
                                        </div>
                                        <br>
                                        <br>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <a href="{{ route('movie_order') }}" class="btn btn-danger me-1 mb-1">Cancel</a>
                                            <button type="submit" class="btn btn-primary me-1 mb-1">
                                                Save
                                            </button>
                                            <button type="reset" class="btn btn-secondary me-1 mb-1">
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