<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class addEmployeeController extends Controller
{
  public function store(Request $request){
     //dd($request->all());
     $employee=new Employee;
     $employee->id=$request->Employee_ID;
     $employee->FName=$request->First_Name;
     $employee->LName=$request->Last_Name;
     $employee->Gender=$request->Gender;
     $employee->Designation=$request->Designation;
     $employee->Contact_No=$request->Contact_Number;
     $employee->Email=$request->email;
     $employee->image=$request->Photo;
     $employee->save();
     return redirect()->back();
  }
}
