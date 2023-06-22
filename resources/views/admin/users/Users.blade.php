@extends('admin.layouts.appadmin')
@section('content')

<h1 align="center">selamat datang di produk</h1>
<h1 class="mt-4">Tables</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Tables</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <!-- <i class="fas fa-table me-1"></i> -->
        <a class="btn btn-success" href="{{url('admin/produk/create')}}">Create Produk</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                <th>No</th>
                <th>Name</th>
                <th>email</th>
                <th>password</th>
                <th>role</th>
                <th>remember token</th> 
                <th>action</th> 
                </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
            @foreach($users as $u)

       
            <tr>
            <td>{{$no}}</td>   
            <td>{{$u->name}}</td>
            <td>{{$u->email}}</td>
            <td>{{$u->pasword}}</td>
            <td>{{$u->role_id}}</td>
            <td>{{$u->remember_token}}</td>
                <td>
                    <a class="btn btn-primary" href=''>View</a>
                    <a class="btn btn-primary" href="{{url('admin/produk/edit'.$p->id)}}">Edit</a>
                    <a class="btn btn-primary" href="{{url('admin/produk/delete/'.$p->id)}}">Delete</a>
                </td>
            </tr>
       @endforeach
    </tbody>
        </table>
    </div>
</div>

@endsection     