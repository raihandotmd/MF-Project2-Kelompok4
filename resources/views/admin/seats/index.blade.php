@extends('admin.layouts.app')
@section('content')
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Seats Table</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body py-1">
                            <a href="{{ route('seats.create') }}" class="btn btn-primary">Create</a>
                        </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Cinema Code</th>
                                        <th>Seats Code</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($seats as $seat)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $seat->cinema_id }}</td>
                                            <td>{{ $seat->seat_code }}</td>
                                            <td>{{ $seat->seat_status }}</td>
                                            <td>
                                                <a href="{{ route('seats.edit', $seat->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                                <form action="{{ route('seats.destroy', $seat->id) }}" method="POST"
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
