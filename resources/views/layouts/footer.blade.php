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
    
<!---footer---->

<footer>
  <div class="container py-5">
    <div class="row">
    <div class="col-lg-3">
        <h3 class="pb-3">About</h3>
        <p class="para" style="text-align: justify">We provide all telecommunication solutions to the nation as a pride company.From here we assign our employers various tasks through online.</p>
      </div>
      <div class="col-lg-3">
        <h3 class="pb-3">What we do</h3>
        <p class="para" style="text-align: justify">We assign task to our company employers through online and manage the  tasks. </p>

      </div>
      <div class="col-lg-3">
        <h3 class="pb-3">Privacy policy</h3>
        <p class="para" style="text-align: justify">Your use of the Task Management Websites and/or provision of your Personal Information or sensitive Personal Information to SHRM constitutes your consent to the use, storage, processing and transfer of that information in accordance with this Privacy Statement.</p>

      </div>
      <div class="col-lg-3">
      <h3 class="pb-3">Get in touch</h3>
        
        <a role="button" class="btn btn-prmary" href="tel:+94712132904"><i class="fa fa-phone"></i> </a>
        
        
        <a role="button" class="btn btn-prmary" href="mailto:janithlakshanmadusha@gmail.com"> <i class="fa fa-envelope"></i> </a>
      </div>
    </div>
    <hr>
    <p class="text-center pt-3"> © 2021 IIT. All Rights Reserved.</p>
  </div>
</footer>
<!---footer ends---->

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
