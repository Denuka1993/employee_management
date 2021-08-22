<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\User;
use App\task;

class taskController extends Controller
{
        
    //public function view(){
     //   $tasks = task::all();
     //   return view('TaskView', compact('tasks'));
    //}

        public function store(Request $request){

            $task = new task;
            //$User = new User;

            $this->validate($request,[
                'name' => 'required|max:100',
                'description' => 'required|max:100',
                'assign' => 'required|max:100',
            ]);
    
            $task->TaskName=$request->input('name');
            $task->Description=$request->input('description');
            //$assigns = User::select('FirstName')->get();
            //return view('AssignTask', compact('assigns'));
            $task->AssignTo=$request->input('assign');
            if($request->hasfile('image')){
                $file = $request->file('image');
                $extention = $file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move('uploads/',$filename);
                $task->Image = $filename; 
            }

            $task->Status='Assigned';
    
            $task->save();
            
            return redirect("AssignTask")->with('status','Task successfully assigned');
        }

        public function Employeestatus(){
            $tasks = task::all();
            return view('WorkAssigned', compact('tasks'));
         }
         public function Adminstatus(){
            $tasks = task::all();
            return view('CheckProgress', compact('tasks'));
         }
    
        public function progress(Request $request, $TaskID){
        
            $task = task::find($TaskID);
            
            $task->Status =('In Progress');
            $task->update();
            return redirect('WorkAssigned');   
           
        }
       
        public function  complete(Request $request, $TaskID){
        
            $task = task::find($TaskID);
            
            $task->Status =('Completed');
            $task->update();
            return redirect('WorkAssigned');   
           
        }
    }
