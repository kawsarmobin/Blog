@extends('layouts.app')

@section('content')
  <div class="card text-white bg-dark">
    <div class="card-header">
      <div class="row">
        <div class="col-sm text-center">
          <h4>Current posts</h4>
        </div>
      </div>
    </div>

    <table class="table table-hover">
      <thead>
        <td>Image</td>
        <td>Title</td>
        <td>Editing</td>
        <td>Trashing</td>
      </thead>
      <tbody>
        @if ($posts->count() > 0)
          @foreach ($posts as $post)
            <tr>
              <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="50px"></td>
              <td>{{ $post->title }}</td>
              <td>
                <a class="btn btn-sm btn-primary" href="{!! route('post.edit', $post->id) !!}">
                  Edit
                </a>
              </td>
              <td>
                <a class="btn btn-sm btn-danger" href="{!! route('post.destroy', $post->id) !!}">
                  Trash
                </a>
              </td>
            </tr>
          @endforeach
        @else
          <tr>
            <th colspan="5" class="text-center">No published post</th>
          </tr>
        @endif
      </tbody>
    </table>

  </div>
@endsection
