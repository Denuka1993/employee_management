@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Employee</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/update-employee/{{ $User->Employee_ID }}" ">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}           




<br><br>

              <div class="form-group{{ $errors->has('Employee_ID') ? ' has-error' : '' }}">
              <label for="Employee_ID" class="col-md-4 control-label">Employee_ID</label>

                <div class="col-md-6">
                  <input id="Employee_ID" type="Employee_ID" name="Employee_ID" value="{{$User->Employee_ID}}" placeholder="Employee ID" class="form-control my-3 p-3" value="{{ old('Employee_ID') }}" disabled required autofocus>
                  
                    @if ($errors->has('Employee_ID'))
                        <span class="help-block">
                          <strong>{{ $errors->first('Employee_ID') }}</strong>
                        </span>
                     @endif
                </div>
              </div>



<!------////////////-2-//////-------->

              <div class="form-group{{ $errors->has('First_Name') ? ' has-error' : '' }}">
              <label for="First_Name" class="col-md-4 control-label">First_Name</label>

                <div class="col-md-6">
                  <input id="First_Name" type="text" name="First_Name" value="{{$User->FirstName}}" placeholder="First Name" class="form-control my-3 p-3" value="{{ old('First_Name') }}" required autofocus>
                  
                  @if ($errors->has('First_Name'))
                      <span class="help-block">
                        <strong>{{ $errors->first('First_Name') }}</strong>
                       </span>
                    @endif
                </div>
              </div>

<!---//////////////3-///////////---->
              <div class="form-group{{ $errors->has('Last_Name') ? ' has-error' : '' }}">
              <label for="Last_Name" class="col-md-4 control-label">Last_Name</label>
                <div class="col-md-6">
                  <input id="Last_Name" type="text" name="Last_Name" value="{{$User->LastName}}" placeholder="Last Name" class="form-control my-3 p-3" value="{{ old('Last_Name') }}" required autofocus>
                  
                   @if ($errors->has('Last_Name'))
                      <span class="help-block">
                         <strong>{{ $errors->first('Last_Name') }}</strong>
                      </span>
                    @endif
                </div>
              </div>

<!---//////////////4-///////////---->
              <div class="form-group{{ $errors->has('Gender') ? ' has-error' : '' }}">
              <label for="Gender" class="col-md-4 control-label">Gender</label>
                <div class="col-md-6">
                
                  <input id="Gender" type="radio"  name="Gender" value="male" {{$User->Gender == 'male' ? 'checked' : ''}} ><label for="male">Male</label>
                  <input id="Gender" type="radio"  name="Gender" value="female" {{$User->Gender == 'female' ? 'checked' : ''}} ><label for="female">Female</label><br>

                    @if ($errors->has('Gender'))
                      <span class="help-block">
                         <strong>{{ $errors->first('Gender') }}</strong>
                      </span>
                    @endif

                </div>
              </div>

<!---//////////////5-///////////---->
              <div class="form-group{{ $errors->has('Designation') ? ' has-error' : '' }}">
              <label for="Designation" class="col-md-4 control-label">Designation</label>
                <div class="col-md-6">
                  <input id="Designation" type="text" name="Designation" value="{{$User->Designation}}" placeholder="Designation" class="form-control my-3 p-3" value="{{ old('Designation') }}" required>
 
                  @if ($errors->has('Designation'))
                    <span class="help-block">
                       <strong>{{ $errors->first('Designation') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

<!---//////////////6///////////---->
              <div class="form-group{{ $errors->has('Contact_Number') ? ' has-error' : '' }}">
              <label for="Contact_Number" class="col-md-4 control-label">Contact_Number</label>
                <div class="col-md-6">
                  <input id="Contact_Number" type="text" name="Contact_Number" value="{{$User->ContactNumber}}" placeholder="Contact Number" class="form-control my-3 p-3" value="{{ old('Contact_Number') }}" required>
                  
                  @if ($errors->has('Contact_Number'))
                    <span class="help-block">
                      <strong>{{ $errors->first('Contact_Number') }}</strong>
                    </span>
                   @endif
                </div>
              </div>

<!---//////////////7///////////---->
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">email</label>
                <div class="col-md-6">
                  <input id="email" type="email" name="email" placeholder="E-mail" value="{{$User->Email}}" class="form-control my-3 p-3" value="{{ old('email') }}" required>
                  

                  @if ($errors->has('email'))
                    <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

 <!---//////////////8///////////            

              <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
              <label for="image" class="col-md-4 control-label">Image</label>
                <div class="col-md-6">
                  <input id="Photo" type="file" name="image" class="form-control my-3 p-3" value="{{ old('image') }}" required>
                 

                  @if ($errors->has('image'))
                     <span class="help-block">
                        <strong>{{ $errors->first('image') }}</strong>
                      </span>
                  @endif
                </div>
              </div>----> 
            

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Employee
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
    

<!---footer---->
@extends('layouts.footer')
<!---footer ends---->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
   
    
</body>
</html>