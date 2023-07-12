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
                            <a href="{{ route('movies') }}" class="btn btn-danger">Back</a>
                            <a href="{{ route('movies.create') }}" class="btn btn-primary">Create</a>
                        </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <tr>
                                    <th>ID </th>
                                    <td>{{ $movie->id }}</td>
                                </tr>
                                <tr>
                                    <th>Code </th>
                                    <td>{{ $movie->code }}</td>
                                </tr>
                                <tr>
                                    <th>Title </th>
                                    <td>{{ $movie->title }}</td>
                                </tr>
                                <tr>
                                    <th>Description </th>
                                    <td>{{ $movie->description }}</td>
                                </tr>
                                <tr>
                                    <th>Rating </th>
                                    <td>{{ $movie->rating }}</td>
                                </tr>
                                <tr>
                                    <th>Genre </th>
                                    <td>{{ $genre->name }}</td>
                                </tr>
                                <tr>
                                    <th>Image </th>
                                    <td>{{ $movie->image }}</td>
                                </tr>
                                <tr>
                                    <th>Trailer </th>
                                    <td>{{ $movie->trailer }}</td>
                                </tr>
                                <tr>
                                    <th>Duration </th>
                                    <td>{{ $movie->duration }}</td>
                                </tr>
                                <tr>
                                    <th>Release Date </th>
                                    <td>{{ $movie->release_date }}</td>
                                </tr>
                                <tr>
                                    <th>Director </th>
                                    <td>{{ $movie->director }}</td>
                                </tr>
                                <tr>
                                    <th>Cast </th>
                                    <td>{{ $movie->cast }}</td>
                                </tr>
                                <tr>
                                    <th>Country </th>
                                    <td>{{ $movie->country }}</td>
                                </tr>
                                <tr>
                                    <th>Language </th>
                                    <td>{{ $movie->language }}</td>
                                </tr>
                                <tr>
                                    <th>Age Limit </th>
                                    <td>{{ $movie->age_limit }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
