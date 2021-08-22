@extends('layouts.app')

@section('content')



<!---main section start--->

<section class="main py-3">
  <div class="container pt-5">
    <div class="row" style="background: white, border-radius: 30px">
      <div class="col-lg-6 py-5">
        <h1 class="font-weight-bold py-3" style="font-weight: bold">Hello Employee </h1>
            <h4>Sign in to your account</h4>

            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="col-lg-9">
                <input id="email" placeholder="email"type="email" class="form-control my-3 p-3" name="email" value="{{ old('email') }}" required autofocus>
                  @if ($errors->has('email'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif  
              </div>
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="col-lg-9">
                
                  <input id="password" placeholder="*********" type="password" class="form-control my-3 p-3" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
              </div>

              <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

              <div class="form-row">
                <div class="col-lg-9">
                  
                  <button type="submit" class="btn1 mt-3 mb-5">Login</button>
                </div>
              </div>
              
              <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
              <p>Don't you have an account?<a href="{{ url('/register') }}">Create here</a></p>
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