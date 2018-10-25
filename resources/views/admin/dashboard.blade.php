@extends('layouts.app')

@section('content')
    <div class="card text-white bg-dark">
        <div class="card-header">
            <h5 class="text-center">Dashboard</h5>
        </div>

        <div class="card-body">

            <div class="container">
                <div class="card-deck">

                    <div class="card bg-primary">
                        <div class="card-header">
                            <h6 class="text-center">
                                POSTED
                            </h6>
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text">
                                {{ $posts_count }}
                            </p>
                        </div>
                    </div>

                    <div class="card bg-danger">
                        <div class="card-header">
                            <h6 class="text-center">
                                TRASHED POSTS
                            </h6>
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text">
                                {{ $trashed_count }}
                            </p>
                        </div>
                    </div>

                    <div class="card bg-success">
                        <div class="card-header">
                            <h6 class="text-center">
                                USERS
                            </h6>
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text">
                                {{ $users_count }}
                            </p>
                        </div>
                    </div>

                    <div class="card bg-dark">
                        <div class="card-header">
                            <h6 class="text-center">
                                CATEGORIES
                            </h6>
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text">
                                {{ $categories_count }}
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
