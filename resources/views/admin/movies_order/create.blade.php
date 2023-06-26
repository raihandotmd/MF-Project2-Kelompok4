@extends('admin.layouts.appadmin')
@section('content')




<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<br>
<br>
<h1 >Form Input Produk</h1>
<div class="col-8 ">
<form method="POST" action="{{url('admin/MovieOrder/create')}}" enctype="multipart/form-data" >
{{ csrf_field() }}
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">movie schedule</label> 
    <div class="col-8">
      <input id="text1" name="movie_order" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">User</label> 
    < <div class="col-8">
      <select id="select" name="user_id" class="custom-select">
      @foreach ($Users as $u) 
      <option value="{{$d->id}}">{{$->name}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Seat</label> 
    <div class="col-8">
      <input id="text2" name="seat" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Ticket code</label> 
    <div class="col-8">
      <input id="text3" name="ticket_code" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</div>
</form>
@endsection
