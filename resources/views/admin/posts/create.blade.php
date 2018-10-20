@extends('layouts.app')

@section('content')
  <div class="card text-white bg-dark">
    <div class="card-header">Post Create</div>

    @include('includes.errors')

    <div class="card-body">
      <form class="" action="{!! route('post.store') !!}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">Category</label>
          <div class="col-md-7">
            <select class="form-control" name="category_id">
              <option value="">Select Category</option>
              @if ($categories)
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              @endif
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">Title</label>
          <div class="col-md-7">
            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">Featured</label>
          <div class="col-md-7">
            <input type="file" class="form-control" name="featured" value="{{ old('featured') }}">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-3 text-md-right form-check-label">Select tags</label>
          <div class="col-md-7">
            @if ($tags)
              @foreach ($tags as $tag)
                <ul>
                  <label class="form-check-label">
                    <li><input class="form-check-input" name="tags[]" type="checkbox" value="{{ $tag->id }}"> {{ $tag->tag }}</li>
                  </label>
                </ul>
              @endforeach
            @endif
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">Content</label>
          <div class="col-md-7">
            <textarea class="form-control" name="content" rows="4" cols="80">{{ old('content') }}</textarea>
          </div>
        </div>

        <div class="form-group">
          <div class="text-center">
            <button class="btn btn-secondary" type="submit">Store Post</button>
          </div>
        </div>

      </form>
    </div>
  </div>
@endsection
