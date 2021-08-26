<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\leave;
use App\User;
class LeaveController extends Controller
{
    public function apply(Request $request){
        $todayDate = date('m/d/Y');
      
        
        $leave = new leave;
        
        $this->validate($request,[
            'empName' => 'required|max:100',
            'reason' => 'required|max:200',
            'date' => 'required|after:'.$todayDate ,
        ]);

        $leave->FirstName=$request->input('empName');
        $leave->Date=$request->input('date');
        $leave->Reason=$request->input('reason');
        $leave->Status='Applied';

        $leave->save();
        
        return redirect("ApplyLeave")->with('status','Leave Successfully applied');
    }

    public function ApproveStatus($LeaveFormID){
        $leave = new leave;

        $leave=leave::find($LeaveFormID);
        $leave->Status="Approved";
        $leave->update();
        return redirect()->back();
     }

     public function DeclineStatus($LeaveFormID){
        $leave = new leave;

        $leave=leave::find($LeaveFormID);
        $leave->Status="Declined";
        $leave->update();
        return redirect()->back();
     }
     public function leaveview(){
        $leaves = leave::all();;
        return view('LeaveDetails', compact('leaves')); 
    }

    public function EmpStatus(){
        $leaves = leave::all();;
        return view('LeaveStatus', compact('leaves')); 
    }
}
