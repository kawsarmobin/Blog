@extends('layouts.app')

@section('content')
  <div class="card text-white bg-dark">
    <div class="card-header text-center">
      <h5>Create a new user</h5>
    </div>

    @include('includes.errors')

    <div class="card-body">
      <form class="" action="{!! route('user.store') !!}" method="post">
        @csrf

        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">Name</label>
          <div class="col-md-7">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">Email</label>
          <div class="col-md-7">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
          </div>
        </div>

        <div class="form-group">
          <div class="text-center">
            <button class="btn btn-secondary" type="submit">Add user</button>
          </div>
        </div>

      </form>
    </div>
  </div>
@endsection
