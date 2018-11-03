@extends('layouts.app')

@section('content')
  <div class="card text-white bg-dark">
    <div class="card-header">
      <div class="row">
        <div class="col-sm text-center">
          <h4>Current users</h4>
        </div>
      </div>
    </div>

    <table class="table table-hover">
      <thead>
        <td>Avatar</td>
        <td>Name</td>
        <td>Permissions</td>
        <td>Destroy</td>
      </thead>
      <tbody>
        @if ($users->count() > 0)
          @foreach ($users as $user)
            <tr>
              <td><img src="{{ asset($user->profile ? $user->profile->avatar : '') }}" alt="{{ $user->name }}" width="50px" style="border-radius: 50px;"></td>
              <td>{{ $user->name }}</td>
              <td>
                @if ($user->admin)
                  <a class="btn btn-sm btn-danger" href="{!! route('user.not.admin', $user->id) !!}">
                    Remove permissions
                  </a>
                @else
                  <a class="btn btn-sm btn-success" href="{!! route('user.admin', $user->id) !!}">
                    Make admin
                  </a>
                @endif
              </td>
              <td>
                @if (Auth::id() !== $user->id)
                  <a class="btn btn-sm btn-danger" href="{!! route('user.destroy', $user->id) !!}">
                    Delete
                  </a>
                @endif
              </td>
            </tr>
          @endforeach
        @else
          <tr>
            <th colspan="5" class="text-center">No users</th>
          </tr>
        @endif
      </tbody>
    </table>

  </div>
@endsection
