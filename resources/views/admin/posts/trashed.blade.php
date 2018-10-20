@extends('layouts.app')

@section('content')
  <div class="card text-white bg-dark">
    <div class="card-header">
      <div class="row">
        <div class="col-sm text-center">
          <h4>Current trushed posts</h4>
        </div>
      </div>
    </div>

    <table class="table table-hover">
      <thead>
        <td>Image</td>
        <td>Title</td>
        <td>Editing</td>
        <td>Restore</td>
        <td>Destroy</td>
      </thead>
      <tbody>
        @if ($posts)
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
                <a class="btn btn-sm btn-success" href="{!! route('post.restore', $post->id) !!}">
                  Restore
                </a>
              </td>

              <td>
                <a class="btn btn-sm btn-danger" href="{!! route('post.permanentlyDeleted', $post->id) !!}">
                  Delete
                </a>
              </td>
            </tr>
          @endforeach
        @endif
      </tbody>
    </table>

  </div>
@endsection
