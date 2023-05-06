<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'PaySpace') }}</title>
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand bg-secondary rounded p-1 text-light" href="#">Admin Dashboard</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <button type="button" class="btn btn-outline-secondary p-0">
                  <a type="button" class="nav-link active" aria-current="page" href="{{ route('admin.users') }}">Users </a>
                </button>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('admin.merchants') }}">merchants </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> payments </a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" > reports </a>
              </li>
            </ul>
              <button class="btn btn-outline-success" type="button"  onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
         
              log out
              </button>
          </div>
        </div>
    </nav>

    @yield('content')

    <script src="{{URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>