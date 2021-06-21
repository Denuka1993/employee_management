

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



    <title>Signup</title>
  </head>
  <body>
    
<!--navbar begin--->
<nav class="navbar navbar-expand-lg bg-white shadow fixed-top">
  <div class="container px-3">
    <a class="navbar-brand" href="{{ url('/AdminHome') }}">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav m-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ url('/addEmployee') }}">Manage Employees</a>
          
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Notificatons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Messages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Employee Support</a>
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

<section class="main py-1">
  <div class="container pt-5">
    <div class="row" style="background: white, border-radius: 30px">
      <div class="col-lg-6 py-5">
        <h1 class="font-weight-bold py-1" style="font-weight: bold">Hello Admin! </h1>
            <h4>Add New Employees</h4>

           <form method="POST" action="/saveEmployee"> 
           {{ csrf_field() }}

<!-----------//////////1////////-------->

              <div class="form-row{{ $errors->has('Employee_ID') ? ' has-error' : '' }}">
                <div class="col-lg-9">
                  <input id="Employee_ID" type="empID" name="Employee_ID" placeholder="Employee ID" class="form-control my-3 p-3" value="{{ old('Employee_ID') }}" required autofocus>
                  
                    @if ($errors->has('Employee_ID'))
                        <span class="help-block">
                          <strong>{{ $errors->first('Employee_ID') }}</strong>
                        </span>
                     @endif
                </div>
              </div>

<!------////////////-2-//////-------->
              <div class="form-row{{ $errors->has('First_Name') ? ' has-error' : '' }}">
                <div class="col-lg-9">
                  <input id="First_Name" type="text" name="First_Name" placeholder="First Name" class="form-control my-3 p-3" value="{{ old('First_Name') }}" required autofocus>
                  
                  @if ($errors->has('First_Name'))
                      <span class="help-block">
                        <strong>{{ $errors->first('First_Name') }}</strong>
                       </span>
                    @endif
                </div>
              </div>

<!---//////////////3-///////////---->
              <div class="form-row{{ $errors->has('Last_Name') ? ' has-error' : '' }}">
                <div class="col-lg-9">
                  <input id="Last_Name" type="text" name="Last_Name" placeholder="Last Name" class="form-control my-3 p-3" value="{{ old('Last_Name') }}" required autofocus>
                  
                   @if ($errors->has('Last_Name'))
                      <span class="help-block">
                         <strong>{{ $errors->first('Last_Name') }}</strong>
                      </span>
                    @endif
                </div>
              </div>

<!---//////////////4-///////////---->
              <div class="form-row{{ $errors->has('Gender') ? ' has-error' : '' }}">
                <div class="col-lg-9">
                
                  <input id="Gender" type="radio"  name="Gender" value="male"><label for="male">Male</label>
                  <input id="Gender" type="radio"  name="Gender" value="female" ><label for="female">Female</label><br>

                    @if ($errors->has('Gender'))
                      <span class="help-block">
                         <strong>{{ $errors->first('Gender') }}</strong>
                      </span>
                    @endif

                </div>
              </div>

<!---//////////////5-///////////---->
              <div class="form-row{{ $errors->has('Designation') ? ' has-error' : '' }}">
                <div class="col-lg-9">
                  <input id="Designation" type="text" name="Designation" placeholder="Designation" class="form-control my-3 p-3" value="{{ old('Designation') }}" required>
 
                  @if ($errors->has('Designation'))
                    <span class="help-block">
                       <strong>{{ $errors->first('Designation') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

<!---//////////////6///////////---->
              <div class="form-row{{ $errors->has('Contact_Number') ? ' has-error' : '' }}">
                <div class="col-lg-9">
                  <input id="Contact_Number" type="text" name="Contact_Number" placeholder="Contact Number" class="form-control my-3 p-3" value="{{ old('Contact_Number') }}" required>
                  
                  @if ($errors->has('Contact_Number'))
                    <span class="help-block">
                      <strong>{{ $errors->first('Contact_Number') }}</strong>
                    </span>
                   @endif
                </div>
              </div>

<!---//////////////7///////////---->
              <div class="form-row{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="col-lg-9">
                  <input id="email" type="email" name="email" placeholder="E-mail" class="form-control my-3 p-3" value="{{ old('email') }}" required>
                  

                  @if ($errors->has('email'))
                    <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

<!---//////////////8///////////---->
              <div class="form-row{{ $errors->has('Photo') ? ' has-error' : '' }}">
                <div class="col-lg-9">
                  <input id="Photo" type="file" name="Photo" class="form-control my-3 p-3" value="{{ old('Photo') }}" required>
                 

                  @if ($errors->has('Photo'))
                     <span class="help-block">
                        <strong>{{ $errors->first('Photo') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="form-row">
                <div class="col-lg-9">
                  <button type="submit" class="btn1 mt-3 mb-5">Add Employee</button>
                </div>
              </div>
             
              
            </form>
      </div>
      <div class="col-lg-6">
        <img src="images/home.jpg" class="img-fluid" style="border-top-left-radius: 30px,
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
        <p class="para">Accordingly within given time frame and access all details of them. </p>
      </div>
      <div class="col-lg-3">
        <h3 class="pb-3">Work</h3>
        <p class="para">Accordin gly within given timgly within given time frame and access all details of them. </p>

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
    <hr>
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



