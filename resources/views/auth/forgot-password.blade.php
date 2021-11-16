<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Restaurar Contraseña</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('css/simplebar.css') }}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('css/feather.css') }}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('css/app-light.css') }}" id="lightTheme">
    <link rel="stylesheet" href="{{ asset('css/app-dark.css') }}" id="darkTheme" disabled>
  </head>
  <body class="light">
    <div class="wrapper vh-100">
        <div class="row align-items-center h-100">
        
          <form method="POST" action="{{ route('password.email') }}" class="col-lg-3 col-md-4 col-10 mx-auto text-center">
              @csrf
            <div class="mx-auto text-center my-4">
              <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="/">
                  <img src="{{ asset('assets/images/logo.png') }}" alt="" class="navbar-brand-img brand-sm w-25" id="logo">
              </a>
              <h2 class="my-3">Reset Password</h2>
            </div>
            <p class="text-muted">Enter your email address and we'll send you an email with instructions to reset your password</p>
            <div class="form-group">
              <label for="email" class="sr-only">{{ __('Email') }}</label>
              <input type="email" id="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Email address" required="" autofocus="" value="{{ old('email') }}">
              @error('email')
                <div class="text-danger"> {{ $message }} </div>
              @enderror
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Email Password Reset Link') }}</button>
            <p class="mt-5 mb-3 text-muted">© 2020</p>
          </form>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/simplebar.min.js') }}"></script>
    <script src="{{ asset('js/daterangepicker.js') }}"></script>
    <script src="{{ asset('js/jquery.stickOnScroll.js') }}"></script>
    <script src="{{ asset('js/tinycolor-min.js') }}"></script>
    <script src="{{ asset('js/config.js') }}"></script>
    <script src="{{ asset('js/apps.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>
</body>
</html>


