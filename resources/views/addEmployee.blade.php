@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-weight:bold">Add an Employee</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/saveEmployee">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('Employee_ID') ? ' has-error' : '' }}">
                            <label for="Employee_ID" class="col-md-4 control-label">Employee ID</label>

                            <div class="col-md-6">
                                <input id="Employee_ID" type="text" class="form-control" name="Employee_ID" value="{{ old('Employee_ID') }}" required autofocus>

                                @if ($errors->has('Employee_ID'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Employee_ID') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('First_Name') ? ' has-error' : '' }}">
                            <label for="First_Name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="First_Name" type="text" class="form-control" name="First_Name" value="{{ old('First_Name') }}" required autofocus>

                                @if ($errors->has('First_Name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('First_Name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Last_Name') ? ' has-error' : '' }}">
                            <label for="Last_Name" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="Last_Name" type="text" class="form-control" name="Last_Name" value="{{ old('Last_Name') }}" required autofocus>

                                @if ($errors->has('Last_Name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Last_Name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Gender') ? ' has-error' : '' }}">
                            <label for="Gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                <input id="Gender" type="radio"  name="Gender" value="male" ><label for="male">Male</label><br>
                                <input id="Gender" type="radio"  name="Gender" value="female"><label for="female">Female</label><br>

                                @if ($errors->has('Gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Designation') ? ' has-error' : '' }}">
                            <label for="Designation" class="col-md-4 control-label">Designation</label>

                            <div class="col-md-6">
                                <input id="Designation" type="text" class="form-control" name="Designation" value="{{ old('Designation') }}" required>

                                @if ($errors->has('Designation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Designation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Contact_Number') ? ' has-error' : '' }}">
                            <label for="Contact_Number" class="col-md-4 control-label">Contact Number</label>

                            <div class="col-md-6">
                                <input id="Contact_Number" type="text" class="form-control" name="Contact_Number" value="{{ old('Contact_Number') }}" required>

                                @if ($errors->has('Contact_Number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Contact_Number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('Photo') ? ' has-error' : '' }}">
                            <label for="Photo" class="col-md-4 control-label">Photo of the employee</label>

                            <div class="col-md-6">
                            
                                <input id="Photo" type="file" class="form-control" name="Photo" value="{{ old('Photo') }}" required>

                                @if ($errors->has('Photo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Photo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
