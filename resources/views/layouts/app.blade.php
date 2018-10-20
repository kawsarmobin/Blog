<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script>

      @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
      @endif

      @if (Session::has('info'))
        toastr.info("{{ Session::get('info') }}")
      @endif

    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
</head>
<body style="background-image: url('https://wallpaper-house.com/data/out/4/wallpaper2you_37293.jpg');">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <br>

        <div class="container">
          <div class="row">

              <div class="col-sm-3">
                @if (Auth::check())
                <div class="card text-white bg-dark">
                  <div class="card-header">Menu</div>
                  <div class="card-body">
                    <dl>
                      <a style="text-decoration: none; color: white;" href="{{ route('home') }}">
                        <dd>Home</dd>
                      </a> <hr style="padding: 0; margin: 0">

                      {{-- Categories --}}
                      <a style="text-decoration: none; color: white;" href="{{ route('category.create') }}">
                        <dd>Create a new category</dd>
                      </a> <hr style="padding: 0; margin: 0">
                      <a style="text-decoration: none; color: white;" href="{{ route('categories') }}">
                        <dd>Categories</dd>
                      </a> <hr style="padding: 0; margin: 0">

                      {{-- post --}}
                      <a style="text-decoration: none; color: white;" href="{{ route('post.create') }}">
                        <dd>Create a new post</dd>
                      </a> <hr style="padding: 0; margin: 0">
                      <a style="text-decoration: none; color: white;" href="{{ route('posts') }}">
                        <dd>All posts</dd>
                      </a> <hr style="padding: 0; margin: 0">
                      <a style="text-decoration: none; color: white;" href="{{ route('posts.trashed') }}">
                        <dd>All trashed posts</dd>
                      </a> <hr style="padding: 0; margin: 0">

                      {{-- Tag --}}
                      <a style="text-decoration: none; color: white;" href="{{ route('tag.create') }}">
                        <dd>Create a new tag</dd>
                      </a> <hr style="padding: 0; margin: 0">
                      <a style="text-decoration: none; color: white;" href="{{ route('tags') }}">
                        <dd>Tags</dd>
                      </a> <hr style="padding: 0; margin: 0">
                    </dl>
                  </div>
                </div>
              @endif
              </div>

            <div class="col-sm-9">
              @yield('content')
            </div>

          </div>
        </div>

    </div>
</body>
</html>
