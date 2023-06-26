@extends('admin.layouts.app')
@section('content')
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Movies Schedule Table</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body py-1">
                            <a href="{{ route('movies.create') }}" class="btn btn-primary">Create</a>
                        </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Movie Id</th>
                                        <th>Cinema Id</th>
                                        <th>Starts</th>
                                        <th>Ends</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($movies_schedule as $movie)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $movie->movie_id }}</td>
                                            <td>{{ $movie->cinema_id }}</td>
                                            <td>{{ $movie->starts }}</td>
                                            <td>{{ $movie->end }}</td>
                                            <td>{{ $movie->price }}</td>
                                            <td>
                                                <a href="{{ route('movies.show', $movie->id) }}"
                                                    class="btn btn-primary">Show</a>
                                                <a href="{{ route('movies.edit', $movie->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                                <form action="{{ route('movies.destroy', $movie->id) }}" method="POST"
                                                    class="d-inline">
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
