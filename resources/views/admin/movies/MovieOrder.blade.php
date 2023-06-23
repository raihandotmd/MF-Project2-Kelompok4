@extends('admin.layouts.appadmin')
@section('content')

<h1 align="center">selamat datang di pesanan</h1>
<h1 class="mt-4">Tables</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Tables</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <!-- <i class="fas fa-table me-1"></i> -->
        <a class="btn btn-success" href="{{url('/MovieOrder/store')}}">Create</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                <th>No</th>
                <th>Movie schedule</th>
                <th>user</th>
                <th>seat</th>
                <th>ticket kode</th>
                <th>action</th> 
                </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
            @foreach($movieOrders as $m)

       
            <tr>
            <td>{{$no}}</td> 
            <td>{{$m->movie_schedule}}</td>
            <td>{{$m->user_id}}</td>
            <td>{{$m->seat}}</td>
            <td>{{$m->ticket_code}}</td>
                <td>
                    <a class="btn btn-primary" href=''>View</a>
                    <a class="btn btn-primary" href=''>Edit</a>
                    <a class="btn btn-primary" href=''>Delete</a>
                </td>
            </tr>
       @endforeach
    </tbody>
        </table>
    </div>
</div>

@endsection