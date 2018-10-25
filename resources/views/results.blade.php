@extends('layouts.frontend')

@section('content')

    <!-- Stunning Header -->

    <div class="stunning-header stunning-header-bg-lightviolet">
        <div class="stunning-header-content">
            <h1 class="stunning-header-title">Search result: {{ $query }}</h1>
        </div>
    </div>

    <!-- End Stunning Header -->

    <div class="row medium-padding120">
        <main class="main">

            @if ($posts->count() > 0)
                <div class="row">
                    <div class="case-item-wrap">
                        @foreach ($posts as $post)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                        <img src="{{ $post->featured }}" alt="our case">
                                    </div>
                                    <h6 class="case-item__title"><a href="{{ route('post.single', $post->slug) }}">{{ $post->title }}</a></h6>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <h1 class="text-center">No result found.</h1>
            @endif

        </main>
    </div>

@endsection
