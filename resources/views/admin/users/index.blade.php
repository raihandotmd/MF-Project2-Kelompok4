@extends('admin.layouts.app')
@section('content')
<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Users Table</h4>
                </div>
                <div class="card-content">
                    <div class="card-body py-1">
                        <a href="{{ route('users.create') }}" class="btn btn-primary">Create</a>
                    </div>
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>email</th>
                                    <th>password</th>
                                    <th>role</th>
                                    <th>remember token</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->password }}</td>
                                    <td>{{ $user->role_id }}</td>
                                    <td>{{ $user->remember_token }}</td>
                                    <td>
                                        <form action="{{ route('movies.destroy', $user->id) }}" method="POST" class="d-inline">
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