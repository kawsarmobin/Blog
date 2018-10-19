@extends('layouts.app')

@section('content')
  <div class="card text-white bg-dark">
    <div class="card-header">Create a new category</div>

    @include('includes.errors')

    <div class="card-body">
      <form class="" action="{!! route('category.store') !!}" method="post">
        @csrf

        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">Name</label>
          <div class="col-md-7">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
          </div>
        </div>

        <div class="form-group">
          <div class="text-center">
            <button class="btn btn-secondary" type="submit">Store category</button>
          </div>
        </div>

      </form>
    </div>
  </div>
@endsection
