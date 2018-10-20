@extends('layouts.app')

@section('content')
  <div class="card text-white bg-dark">
    <div class="card-header text-center">
      <h5>Update tag: </h5>{{ $tag->tag }}
    </div>

    @include('includes.errors')

    <div class="card-body">
      <form class="" action="{!! route('tag.update', $tag->id) !!}" method="post">
        @csrf

        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">Tag</label>
          <div class="col-md-7">
            <input type="text" class="form-control" name="tag" value="{{ $tag->tag }}">
          </div>
        </div>

        <div class="form-group">
          <div class="text-center">
            <button class="btn btn-secondary" type="submit">Update tag</button>
          </div>
        </div>

      </form>
    </div>
  </div>
@endsection
