@extends('layouts.app')

@section('content')
  <div class="card text-white bg-dark">
    <div class="card-header text-center"><h5>Update post:</h5> {{ $post->title }}</div>

    @include('includes.errors')

    <div class="card-body">
      <form class="" action="{!! route('post.update', $post->id) !!}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">Category</label>
          <div class="col-md-7">
            <select class="form-control" name="category_id">
              <option value="">Select Category</option>
              @if ($categories)
                @foreach ($categories as $category)
                  <option {{ $post->category_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              @endif
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">Title</label>
          <div class="col-md-7">
            <input type="text" class="form-control" name="title" value="{{ $post->title }}">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">Old Featured</label>
          <div class="col-md-7">
            <img src="{{ $post->featured }}" alt="{{ $post->title }}" width="200px">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">Featured</label>
          <div class="col-md-7">
            <input type="file" class="form-control" name="featured" value="{{ $post->featured }}">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-3 col-form-label text-md-right">Content</label>
          <div class="col-md-7">
            <textarea class="form-control" name="content" rows="4" cols="80">{{ $post->content }}</textarea>
          </div>
        </div>

        <div class="form-group">
          <div class="text-center">
            <button class="btn btn-secondary" type="submit">Update Post</button>
          </div>
        </div>

      </form>
    </div>
  </div>
@endsection
