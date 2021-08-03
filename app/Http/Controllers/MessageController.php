<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;
//use App\Employee;

class MessageController extends Controller
{
    //public function store(){
        
        //$Employee=new Employee;
        //$Employee= DB::table('FName')->get();
        //return view('message', compact('Employee'));
       //}

    public function store(Request $request){
        //dd($request->all());
        $message=new Messages;
        $message->From='Admin';
        // dd($Employee);
        $message->To=$request->To;
        $message->Content=$request->Content;
        $message->Date=$request['time']=date("Y-m-d ", time());
        $message->Time=$request['time']=date("h:i:s a", time());
        $message->save();
        return redirect()->back();
    }

}
