@extends('admin.layouts.app')
@section('content')
    <section class="section">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Movies Order Table</h4>
                    </div>
                    <div class="card-content">
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie schedule</th>
                                        <th>user</th>
                                        <th>seat</th>
                                        <th>ticket kode</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($movies_order as $movie_order)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $movie_order->movie_schedule }}</td>
                                            <td>{{ $movie_order->user_id }}</td>
                                            <td>{{ $movie_order->seat }}</td>
                                            <td>{{ $movie_order->ticket_code }}</td>
                                            <td>
                                                <form action="{{ route('movie_order.destroy', $movie_order->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
