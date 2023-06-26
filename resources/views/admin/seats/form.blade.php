@extends('admin.layouts.app')
@section('content')
    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height justify-content-center">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Seat Form</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{ route('seats.store') }}" method="POST">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Cinema Code</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select name="cinema_id" id="cinema_id" class="form-select">
                                                @foreach ($cinemas as $cinema)
                                                    <option value="{{ $cinema->id }}">{{ $cinema->code }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Seat Code</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name-horizontal" class="form-control" name="seat_code"
                                                placeholder="Genre Name" />
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Seat Status</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select name="seat_status" id="seat_status" class="form-select">
                                                <option value="available">Available</option>
                                                <option value="unavailable">Not Available</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
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
