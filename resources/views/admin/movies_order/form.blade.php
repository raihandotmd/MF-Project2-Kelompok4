@extends('admin.layouts.appadmin')
@section('content')




<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<br>
<br>
<h1>Form Input Produk</h1>
<div class="col-8 ">
  <form method="POST" action="{{url('admin/MovieOrder/create')}}" enctype="multipart/form-data">
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

@extends('admin.layouts.app')
@section('content')
    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height justify-content-center">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Movies</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{ route('movies.store') }}" method="POST">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Code</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name-horizontal" class="form-control" name="code"
                                                placeholder="type code..." />
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Title</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name-horizontal" class="form-control" name="title"
                                                placeholder="type title..." />
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Description</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <textarea id="name-horizontal" class="form-control" name="description" placeholder="type desc..."></textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Genre</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select name="genre_id" id="genre" class="form-select">
                                                @foreach ($genres as $genre)
                                                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Image</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name-horizontal" class="form-control" name="image"
                                                placeholder="type here..." />
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Trailer</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name-horizontal" class="form-control" name="trailer"
                                                placeholder="type trailer..." />
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Duration</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name-horizontal" class="form-control" name="duration"
                                                placeholder="type duration..." />
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Release Date</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="date" id="name-horizontal" class="form-control"
                                                name="release_date" placeholder="type release date..." />
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Director</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name-horizontal" class="form-control" name="director"
                                                placeholder="type director..." />
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Cast</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name-horizontal" class="form-control" name="cast"
                                                placeholder="type cast..." />
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Country</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name-horizontal" class="form-control" name="country"
                                                placeholder="type country..." />
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Language</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name-horizontal" class="form-control"
                                                name="language" placeholder="type language..." />
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name-horizontal">Age Limit</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name-horizontal" class="form-control"
                                                name="age_limit" placeholder="type age limit..." />
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <a href="{{ route('movies') }}" class="btn btn-danger">Back</a>
                                            <button type="submit" class="btn btn-primary me-1 mb-1">
                                                Create
                                            </button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                                Reset
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic Horizontal form layout section end -->
@endsection
