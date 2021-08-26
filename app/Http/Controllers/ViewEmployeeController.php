<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;


class ViewEmployeeController extends Controller
{
    


    public function index(){
        
        $User = User::all();
       // dd($Employee);
       return view('ViewEmployee', compact('User'));
       
    }

    public function edit($Employee_ID){
        
        
        $User = User::find($Employee_ID);
        return view('editEmployee',compact('User'));
       
    }

    public function update(Request $request, $Employee_ID){
        
        $User = User::find($Employee_ID);

        $this->Validate($request,[
            
            'First_Name' => 'required|string|max:255',
            'Last_Name' => 'required|string|max:255',
            'Gender' => 'required|string|max:255',
            'Designation' => 'required|string|max:255',
            'Contact_Number' => 'required|string|min:10|max:10',
            'email' => 'required|string|email|max:255',
            


            
        ]);

       
        
        
        $User->FirstName = $request->input('First_Name');
        $User->LastName = $request->input('Last_Name');
        $User->Gender = $request->input('Gender');
        $User->Designation = $request->input('Designation');
        $User->ContactNumber = $request->input('Contact_Number');
        $User->email = $request->input('email');
        
         $User->update();
         return redirect('ViewEmployee')->with('status','Employee Successfully Edited');  
         
       
    }
    public function delete($Employee_ID){
       
        $User = User::find($Employee_ID);
        if ($User != null) {
            $User->delete();
            return redirect()->back()->with('status','Employee Successfully Deleted');  ;
        }
        

    }

}