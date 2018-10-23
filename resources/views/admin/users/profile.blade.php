@extends('layouts.app')

@section('content')
  <div class="card text-white bg-dark">
    <div class="card-header text-center">
      <h5>Edit your profile</h5>
    </div>

    @include('includes.errors')

    <div class="card-body">
      <form class="" action="{!! route('user.profile.update') !!}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">Username</label>
          <div class="col-md-7">
            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">Email</label>
          <div class="col-md-7">
            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">New password</label>
          <div class="col-md-7">
            <input type="password" class="form-control" name="password">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">Upload avatar</label>
          <div class="col-md-7">
            <input type="file" class="form-control" name="avatar">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">Facebook profile</label>
          <div class="col-md-7">
            <input type="text" class="form-control" name="facebook" value="{{ $user->profile->facebook }}">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">YouTube profile</label>
          <div class="col-md-7">
            <input type="text" class="form-control" name="youtube" value="{{ $user->profile->youtube }}">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">About you</label>
          <div class="col-md-7">
            <textarea class="form-control" name="about" rows="8" cols="80">{{ $user->profile->about }}</textarea>
          </div>
        </div>

        <div class="form-group">
          <div class="text-center">
            <button class="btn btn-secondary" type="submit">Update profile</button>
          </div>
        </div>

      </form>
    </div>
  </div>
@endsection
