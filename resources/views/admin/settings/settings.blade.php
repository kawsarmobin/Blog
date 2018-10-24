@extends('layouts.app')

@section('content')
  <div class="card text-white bg-dark">
    <div class="card-header text-center">
      <h5>Edit your blog settings</h5>
    </div>

    @include('includes.errors')

    <div class="card-body">
      <form class="" action="{!! route('settings.update') !!}" method="post">
        @csrf

        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">Site Name</label>
          <div class="col-md-7">
            <input type="text" class="form-control" name="site_name" value="{{ $settings->site_name }}">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">Contact Number</label>
          <div class="col-md-7">
            <input type="text" class="form-control" name="contact_number" value="{{ $settings->contact_number }}">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">Contact Email</label>
          <div class="col-md-7">
            <input type="email" class="form-control" name="contact_email" value="{{ $settings->contact_email }}">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">Address</label>
          <div class="col-md-7">
            <input type="text" class="form-control" name="address" value="{{ $settings->address }}">
          </div>
        </div>

        <div class="form-group">
          <div class="text-center">
            <button class="btn btn-secondary" type="submit">Update blog settings</button>
          </div>
        </div>

      </form>
    </div>
  </div>
@endsection
