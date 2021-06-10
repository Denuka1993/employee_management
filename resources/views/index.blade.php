<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    
    <title>Login Page</title>
    <style>
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;

      }

      html,body{
                background-color: rgb(236, 236, 236);
                color: #0C090A;
                font-family: 'Raleway', sans-serif;
                height: 100vh;
                margin: 0;
                font-weight: 600;
       }

    
      .form-row{
        color: #000000;
        font-family: 'Raleway', sans-serif;
        font-weight: 600;
      }
      .row{
        background: rgb(250, 250, 250);
        border-radius: 30px;
        

      }
      img{
        border-top-left-radius: 30px;
        border-bottom-left-radius: 30px;
      }
      .btn1{
        border: none;
        outline: none;
        height: 50px;
        width: 100%;
        background-color: black;
        color: white;
        border-radius: 4px;
        font-weight: bold;
      }
      .btn1:hover{
        background-color: white;
        border: 1px solid;
        color: black;
      }

      .full-height {
                height: 100vh;
            }

      .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }


      .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

      .content {
                text-align: center;
            }

      .title {
                font-size: 84px;
            }


      .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

      h4{
                font-weight:bold;
              
            }

    </style>
  </head>
  <body>
  <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif



    <section class="Form my-4 mx-5">
      <div class="container">
        <div class="row g-0">
          <!--this is for image column-->
          <div class="col-lg-5">
            <img src="/images/login.jpg" class="img-fluid" alt="">
          </div>
           <!--this is for login form column-->
          <div class="col-lg-7 px-5 pt-5">
          <h1 style="font-weight:900" class="font-weight-bold py-3">Hello Employee!</h1>
            <h4 style="color:#C0C0C0">Sign in to your account</h4>
            <form>
              <div class="form-row">
                <div class="col-lg-7">
                  <input type="empID" placeholder="Employee ID" class="form-control my-3 p-3" >
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-7">
                  <input type="password" placeholder="*********" class="form-control my-3 p-3" >
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-7">
                  <button type="button" class="btn1 mt-3 mb-5">Login</button>
                </div>
              </div>
              <a href="#">Forgot password?</a>
              <p>Don't you have an account?<a href="#">Create here</a></p>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
   
  </body>
</html>
