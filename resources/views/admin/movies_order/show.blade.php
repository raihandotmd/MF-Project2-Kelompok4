@extends('admin.layouts.app')
@section('content')
<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Movie Order Table</h4>
                </div>
                <div class="card-content">
                    <div class="card-body py-1">
                        <a href="{{ route('movie_order') }}" class="btn btn-danger">Back</a>
                        <a href="{{ route('movie_order.create') }}" class="btn btn-primary">Create</a>
                    </div>
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <tr>
                                <th>ID </th>
                                <td>{{ $movie_order->id }}</td>
                            </tr>
                            <tr>
                                <th>Schedule </th>
                                <td>{{ $movie_order->movie_schedule }}</td>
                            </tr>
                            <tr>
                                <th>User </th>
                                <td>{{ $user->user_id }}</td>
                            </tr>
                            <tr>
                                <th>Seat </th>
                                <td>{{ $movie_order->seat }}</td>
                            </tr>
                            <tr>
                                <th>Ticket Code </th>
                                <td>{{ $movie->ticket_code }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection