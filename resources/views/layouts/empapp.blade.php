<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Work From Home Mode') }}</title>


    <link rel="stylesheet" href="/css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <title>Login</title>
  </head>
  <body>
    
<!--navbar begin--->
<nav class="navbar navbar-expand-lg bg-white shadow fixed-top">
  <div class="container px-3">
  <a class="navbar-brand" href="#"></a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">

   
    

      <ul class="navbar-nav m-auto">

      <!-- Authentication Links -->
      

      
    
        @if (Auth::guest())
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/login') }}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/register') }}">Register</a>
        </li>

        @else
        <nav class="navbar navbar-expand-lg bg-white shadow fixed-top">
        <div class="container px-3">
        <a class="navbar-brand" href="{{ url('/AdminHome') }}">Dashboard</a> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNav">

    
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/LeaveDetails') }}">Apply Leave</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        </li>
        <li class="nav-item">
          <a class="nav-link" >   Hello {{ Auth::user()->FirstName }} !</a>
        </li>

        

        
                               
                          

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
</ul>

    </div>
  </div>
</nav>

    @yield('content')
</div>

<!---navbar ends--->

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
