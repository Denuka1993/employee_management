@extends('layouts.app')

@section('content')

<!---main section start--->

<section class="main py-3">
  <div class="container pt-5">
    <div class="row" style="background: white, border-radius: 30px">
      <div class="col-lg-6 py-5">
        <h1 class="font-weight-bold py-3" style="font-weight: bold">Hello Employee </h1>
            <h4>Register Your Account</h4>

            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

<!-----------//////////1////////-------->

              <div class="form-group{{ $errors->has('Employee_ID') ? ' has-error' : '' }}">
                <div class="col-lg-9">
                <input id="Employee_ID" placeholder="Employee ID" type="Employee_ID" class="form-control my-3 p-3" name="Employee_ID" value="{{ old('Employee_ID') }}" required autofocus>
                  @if ($errors->has('Employee_ID'))
                                      <span class="help-block">
                                        <strong>{{ $errors->first('Employee_ID') }}</strong>
                                      </span>
                                  @endif  
              </div>
              </div>

 <!-----------//////////2////////-------->

              <div class="form-group{{ $errors->has('First_Name') ? ' has-error' : '' }}">
                <div class="col-lg-9">
                <input id="First_Name" placeholder="First Name" type="text" class="form-control my-3 p-3" name="First_Name" value="{{ old('First_Name') }}" required autofocus>
                  @if ($errors->has('First_Name'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('First_Name') }}</strong>
                                      </span>
                                  @endif  
              </div>
              </div>



<!-----------//////////3////////-------->

<div class="form-group{{ $errors->has('Last_Name') ? ' has-error' : '' }}">
                <div class="col-lg-9">
                <input id="Last_Name" placeholder="Last Name" type="text" class="form-control my-3 p-3" name="Last_Name" value="{{ old('Last_Name') }}" required autofocus>
                  @if ($errors->has('Last_Name'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('Last_Name') }}</strong>
                                      </span>
                                  @endif  
              </div>
              </div>

<!-----------//////////4////////-------->

<div class="form-group{{ $errors->has('Gender') ? ' has-error' : '' }}">
              <label for="Gender" class="col-md-4 control-label"><h5>Gender</h5></label>
                <div class="col-md-6">
                
                  <input id="Gender" type="radio"  name="Gender" value="male"><label for="male">Male</label>
                  <input id="Gender" type="radio"  name="Gender" value="female" ><label for="female">Female</label><br>

                    @if ($errors->has('Gender'))
                      <span class="help-block">
                         <strong>{{ $errors->first('Gender') }}</strong>
                      </span>
                    @endif

                </div>
              </div>

<!-----------//////////5////////-------->

<div class="form-group{{ $errors->has('Designation') ? ' has-error' : '' }}">
                <div class="col-lg-9">
                <input id="Designation" placeholder="Designation" type="text" class="form-control my-3 p-3" name="Designation" value="{{ old('Designation') }}" required autofocus>
                  @if ($errors->has('Designation'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('Designation') }}</strong>
                                      </span>
                                  @endif  
              </div>
              </div>

<!-----------//////////6////////-------->

<div class="form-group{{ $errors->has('Contact_Number') ? ' has-error' : '' }}">
                <div class="col-lg-9">
                <input id="Contact_Number" placeholder="Contact Number" type="text" class="form-control my-3 p-3" name="Contact_Number" value="{{ old('Contact_Number') }}" required autofocus>
                  @if ($errors->has('Contact_Number'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('Contact_Number') }}</strong>
                                      </span>
                                  @endif  
              </div>
              </div>

<!-----------//////////7////////-------->

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="col-lg-9">
                <input id="email" placeholder="abc123@gmail.com" type="text" class="form-control my-3 p-3" name="email" value="{{ old('email') }}" required autofocus>
                  @if ($errors->has('email'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif  
              </div>
              </div>

<!---//////////////8///////////---->             

<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
              <label for="image" class="col-md-4 control-label"><h5>image</h5></label>
                <div class="col-md-9">
                  <input id="Photo" type="file" name="image" class="form-control my-3 p-3" value="{{ old('image') }}" required>
                 

                  @if ($errors->has('image'))
                     <span class="help-block">
                        <strong>{{ $errors->first('image') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

    
<!---//////////////9///////////---->

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            
                            

                            <div class="col-md-9">
                                <input id="password" type="password" placeholder="Password" class="form-control my-3 p-3" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

        <!---//////////////10///////////---->


        <div class="form-group">
                            

                            <div class="col-md-9">
                                <input id="password-confirm" type="password" placeholder="Confirm Password"  class="form-control my-3 p-3" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn1 mt-3 mb-5">
                                    Register
                                </button>
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
@extends('layouts.footer')
<!---footer ends---->




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
   
  </body>
</html>