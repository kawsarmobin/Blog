@extends('layouts.app')

@section('content')
  <div class="card text-white bg-dark">
    <div class="card-header">Dashboard</div>

    <div class="card-body">
      @if (session('status'))
        <div class="alert alert-success" role="alert">
          {{ session('status') }}
        </div>
      @endif

      Welcome! {{ ucwords(Auth::user()->name) }} Sir

    </div>
  </div>
@endsection
