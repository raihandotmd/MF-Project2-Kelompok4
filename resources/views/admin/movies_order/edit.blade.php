@extends('admin.layouts.app')
@section('content')
<!-- Basic Horizontal form layout section start -->
<section id="basic-horizontal-layouts">
    <div class="row match-height justify-content-center">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Movie Order #{{ $movie_order->id }}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{ route('movies_order.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="name-horizontal">Movie_Schedule</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="name-horizontal" class="form-control" name="Movie_Schedule" placeholder="type Movie_Schedule..." value="{{ $movie_order->Movie_Schedule }}" />
                                    </div>
                                    <div class="col-md-4">
                                        <label for="name-horizontal">User</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select name="user_id" id="user" class="form-select" select>
                                            @foreach ($users as $user)
                                            @if ($user->id == $movie_order->user_id)
                                            <option value="{{ $user->id }}" selected>{{ $user->User Name }}
                                            </option>
                                            @endif
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="name-horizontal">Seat</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="name-horizontal" class="form-control" name="Seat" placeholder="type Seat..." value="{{ $movie_order->Seat }}" />
                                    </div>
                                    <div class="col-md-4">
                                        <label for="name-horizontal">ticket code</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="name-horizontal" class="form-control" name="ticket code" placeholder="type ticket code..." value="{{ $movie_order->ticket code }}" />
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <input type="hidden" name="idedit" value="{{ $movie_order->id }}">
                                        <a href="{{ route('movie_orders') }}" class="btn btn-danger">Back</a>
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