@extends('admin.layouts.app')
@section('content')
<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Movies Order Table</h4>
                </div>
                <div class="card-content">
                    <div class="card-body py-1">
                        <a href="{{ route('movies_order.create') }}" class="btn btn-primary">Create</a>
                    </div>
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
                                        <a href="{{ route('movie_order.show', $movie_order->id) }}" class="btn btn-primary">Show</a>
                                        <a href="{{ route('movie_order.edit', $movie_order->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('movie_order.destroy', $movie_order->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
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