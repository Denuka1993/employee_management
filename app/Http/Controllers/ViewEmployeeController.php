<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;

class ViewEmployeeController extends Controller
{
    public function index(){
        
        $Employee = Employee::all();
       // dd($Employee);
       return view('ViewEmployee', compact('Employee'));
       
    }
}
