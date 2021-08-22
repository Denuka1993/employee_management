<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <title>Rate</title>
  </head>
  <body>
    
<!--navbar begin--->
<nav class="navbar navbar-expand-lg bg-white shadow fixed-top">
  <div class="container px-3">
    <a class="navbar-brand" href="{{ url('/EmployeeHome') }}">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav m-auto">
      <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ url('/ApplyLeave') }}">Apply Leave</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/LeaveStatus') }}">Leave Details</a>
        </li>
      </ul>

      <ul class="navbar-nav">
      
        <button class="Download">Logout</button>
      </ul>

    </div>
  </div>
</nav>



<!---navbar ends--->



<!---main section start--->

<section class="main py-3">
  <div class="container pt-5">
    <div class="row" style="background: white, border-radius: 30px">
      <div class="col-lg-6 py-5">
        <h1 class="font-weight-bold py-3" style="font-weight: bold">Rate Your Experience </h1>
          <!---  <h4>Sign in to your account</h4>--->
          @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
          @endif
          <form action="/rate" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
    
            
              <div class="form-row{{ $errors->has('date') ? ' has-error' : '' }}">
                <div class="col-lg-9">
                  <input type="date" name="date" placeholder="Leave Request Date" class="form-control my-3 p-3" required autofocus>
                </div>
              </div>

              <div class="form-row{{ $errors->has('empName') ? ' has-error' : '' }}">
                <div class="col-lg-9">
                  <input type="empName" name="empName" placeholder="Employee Name" class="form-control my-3 p-3" required autofocus>
                </div>
              </div>

              <div class="form-group{{ $errors->has('Rating') ? ' has-error' : '' }}">
              <label for="Gender" class="col-md-4 control-label"><h5>Rating</h5></label>
                <div class="col-md-6">
                
                  <input id="Rating" type="radio"  name="Rating" value="Excellent"><label for="Excellent">Excellent</label><br>
                  <input id="Rating" type="radio"  name="Rating" value="Very Good" ><label for="Very Good">Very Good</label><br>
                  <input id="Rating" type="radio"  name="Rating" value="Good" ><label for="Good">Good</label><br>
                  <input id="Rating" type="radio"  name="Rating" value="Average" ><label for="Average">Average</label><br>
                  <input id="Rating" type="radio"  name="Rating" value="Poor" ><label for="Poor">Poor</label><br>

                    @if ($errors->has('Rating'))
                      <span class="help-block">
                         <strong>{{ $errors->first('Rating') }}</strong>
                      </span>
                    @endif

                </div>
              </div>
              
              
              <div class="form-row{{ $errors->has('experience') ? ' has-error' : '' }}">
                <div class="col-lg-9">
                  <input type="text" name="experience" placeholder="Experience" class="form-control my-3 p-3" required autofocus>
                </div>
              </div>

             
              

              <div class="form-row">
                <div class="col-lg-9">
                  <button type="submit" value="Apply" class="btn1 mt-3 mb-5">Rate Here</button>
                </div>
              </div>
              
            </form>
      </div>
      <div class="col-lg-6 pt-5">
        <img src="images/leave.png" class="img-fluid" style="border-top-left-radius: 30px,
        border-bottom-left-radius: 30px" alt="">
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
        <p class="para">ccordingly within given time frame and access all details of them. </p>
      </div>
      <div class="col-lg-3">
        <h3 class="pb-3">Work</h3>
        <p class="para">ccordin gly within given timgly within given time frame and access all details of them. </p>

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