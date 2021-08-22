@extends('layouts.app')

@section('content')



<!---main section start--->

<section class="main py-3">
  <div class="container pt-5">
    <div class="row">
      <div class="col-lg-6 py-5">
        <h1 class="Heading pt-5 mt-5">Welcome to Tele Sri Lanaka (pvt)Ltd Work From Home Mode!</h1>
        <p class="p-head py-3">From here you can manage your taks and access all details of them. Have a great day ahead.</p>
        
        <button id="myButton" class="btn1" >Assign Works</button>
        <script type="text/javascript">
          document.getElementById("myButton").onclick = function () {
        location.href = "{{ url('/AssignTask') }}";
         };
      </script>

      <button id="Button1" class="btn2" >Check Progress</button>
        <script type="text/javascript">
          document.getElementById("Button1").onclick = function () {
        location.href = "{{ url('/CheckProgress') }}";
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

<footer>
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-3">
        <h3 class="pb-3">About</h3>
        <p class="para">Accordingly within given time frame and access all details of them. </p>
      </div>
      <div class="col-lg-3">
        <h3 class="pb-3">Work</h3>
        <p class="para">Accordingly within given timgly within given time frame and access all details of them. </p>

      </div>
      <div class="col-lg-3">
        <h3 class="pb-3">Contact</h3>
        <p class="para">ccordingly within given<br>
           time frame and access all<br>
           details of them. <br>
           details of them. </p>

      </div>
      <div class="col-lg-3">
        <h3 class="pb-3">Social Media</h3>
        <span><a href="#"><i class="fa fa-phone"></i></a></span>
        <span><a href="#"><i class="fa fa-instagram"></i></a></span>
        <span><a href="#"><i class="fa fa-google-plus"></i></a></span>
        <span><a href="#"><i class="fa fa-facebook"></i></a></span>
      </div>
    </div>
    <hr>x
    <p class="text-center pt-3"> © 2021 IIT. All Rights Reserved.</p>
  </div>
</footer>
<!---footer ends---->







    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
   
  </body>
</html>