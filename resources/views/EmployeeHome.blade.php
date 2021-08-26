<!doctype html>
<html lang="en">
  <head>
  <script src="//code-eu1.jivosite.com/widget/8vrhRARszD" async></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Employee Home</title>
  </head>
  <body>
    
<!--navbar begin--->
@extends('layouts.app')
@section('content')
<!---navbar ends--->


<!---main section start--->

<section class="main py-3">
  <div class="container pt-5">
    <div class="row">
      <div class="col-lg-6 py-5">
        <h1 class="Heading pt-5 mt-5">Welcome to Tele Sri Lanaka (pvt)Ltd Work From Home Mode!</h1>
        <p class="p-head py-3">From here you can manage your taks and access all details of them. Have a great day ahead.</p>
        
        <button id="myButton1" class="btn1" >Work Assigned</button>
        <script type="text/javascript">
          document.getElementById("myButton1").onclick = function () {
        location.href = "{{ url('/WorkAssigned') }}";
         };
      </script>

<button id="myButton" class="btn1" >Rate Your Experience</button>
        <script type="text/javascript">
          document.getElementById("myButton").onclick = function () {
        location.href = "{{ url('/Rate') }}";
         };
      </script>

      
      </div>
      <div class="col-lg-6">
        <img src="images/home.jpg" class="img-fluid" alt="">
      </div>
    </div>
  </div>
</section>
<!---main section ends---->


<!---footer---->
@extends('layouts.footer')
<!---footer ends---->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
   
    
</body>
</html>