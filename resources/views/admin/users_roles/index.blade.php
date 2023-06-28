@extends('admin.layouts.app')
@section('content')
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">User Roles Table</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body py-1">
                            <a href="{{ route('users_roles.create') }}" class="btn btn-primary">Create</a>
                        </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user_roles as $users_roles)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $users_roles->name }}</td>
                                            <td>
                                                <a href="{{ route('users_roles.edit', $users_roles->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                                <form action="{{ route('users_roles.destroy', $users_roles->id) }}"
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
