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
    if($request->hasfile('image')){
            $file=$request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/',$filename);
            $employee->image=$filename;
      
    }
 $employee->Email=$request->input('Null');
   
    
     $employee->save();
     return redirect()->back();
  }
}
