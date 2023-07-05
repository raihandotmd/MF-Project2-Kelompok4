@extends('admin.layouts.app')
@section('content')
    <section class="section">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cinemas Table</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body py-1">
                            <a href="{{ route('cinemas.create') }}" class="btn btn-primary">Create</a>
                        </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Code</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cinemas as $cinema)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $cinema->code }}</td>
                                            <td>
                                                <a href="{{ route('cinemas.edit', $cinema->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                                <form action="{{ route('cinemas.destroy', $cinema->id) }}" method="POST"
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
