@extends('layouts.app')

@section('content')
  <div class="card text-white bg-dark">
    <div class="card-header">
      <div class="row">
        <div class="col-sm text-center">
          <h4>Current Tags</h4>
        </div>
      </div>
    </div>

    <table class="table table-hover">
      <thead>
        <td>Tag Name</td>
        <td>Editing</td>
        <td>Deleting</td>
      </thead>
      <tbody>
        @if ($tags->count() > 0)
          @foreach ($tags as $tag)
            <tr>
              <td>{{ $tag->tag }}</td>
              <td>
                <a class="btn btn-sm btn-primary" href="{!! route('tag.edit', $tag->id) !!}">
                  Edit
                </a>
              </td>
              <td>
                <a class="btn btn-sm btn-danger" href="{!! route('tag.destroy', $tag->id) !!}">
                  Delete
                </a>
              </td>
            </tr>
          @endforeach
        @else
          <tr>
            <th colspan="5" class="text-center">No tags yet...</th>
          </tr>
        @endif
      </tbody>
    </table>

  </div>
@endsection
