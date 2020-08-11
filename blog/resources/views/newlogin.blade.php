<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('img/img8.ico')}} " rel="shortcut icon">
 
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>My Web | Log in</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
  <div class="form-container flip">
    <form class="login-form" method="POST" action="{{ route('login') }}">
                        @csrf
      <h3 class="title">My Web | Log in.</h3>
      <div class="form-group" id="username">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
      </div>
      <div class="form-group" id="password">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
      </div>
    </form>
    <div class="loading">
      <div class="loading-spinner-large" style="display: none;"></div>
      <div class="loading-spinner-small" style="display: none;"></div>
    </div>
  </div>
</div>


    <script src="{{ asset('lib/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{ asset( 'lib/popper/popper.min.js')}}"></script>
    <script src="{{ asset( 'lib/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</body>
</html>
