@extends('layouts.app')

@section('content')
  <div class="card text-white bg-dark">
    <div class="card-header">
      <div class="row">
        <div class="col-sm text-center">
          <h4>Categories</h4>
        </div>
      </div>
    </div>

    <table class="table table-hover">
      <thead>
        <td>Category Name</td>
        <td>Editing</td>
        <td>Deleting</td>
      </thead>
      <tbody>
        @if ($categories->count() > 0)
          @foreach ($categories as $category)
            <tr>
              <td>{{ ucwords($category->name) }}</td>
              <td>
                <a class="btn btn-sm btn-primary" href="{!! route('category.edit', $category->id) !!}">
                  Edit
                </a>
              </td>
              <td>
                <a class="btn btn-sm btn-danger" href="{!! route('category.destroy', $category->id) !!}">
                  Delete
                </a>
              </td>
            </tr>
          @endforeach
        @else
          <tr>
            <th colspan="5" class="text-center">No categories yet...</th>
          </tr>
        @endif
      </tbody>
    </table>

  </div>
@endsection
