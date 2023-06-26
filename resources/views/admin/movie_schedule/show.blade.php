@extends('admin.layouts.app')
@section('content')
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Movie Table</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body py-1">
                            <a href="{{ route('movie_schedule') }}" class="btn btn-danger">Back</a>
                            <a href="{{ route('movie_schedule.create') }}" class="btn btn-primary">Create</a>
                        </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <tr>
                                    <th>ID </th>
                                    <td>{{ $movie_schedule->id }}</td>
                                </tr>
                                <tr>
                                    <th>Movie Code </th>
                                    <td>{{ $movie->code }}</td>
                                </tr>
                                <tr>
                                    <th>Cinema Code </th>
                                    <td>{{ $cinema->code }}</td>
                                </tr>
                                <tr>
                                    <th>Starts </th>
                                    <td>{{ $movie_schedule->starts }}</td>
                                </tr>
                                <tr>
                                    <th>Ends </th>
                                    <td>{{ $movie_schedule->ends }}</td>
                                </tr>
                                <tr>
                                    <th>Price </th>
                                    <td>{{ $movie_schedule->price }}</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
