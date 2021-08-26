<?php

namespace App\Http\Controllers;
use App\rate;
use Illuminate\Http\Request;

class RateController extends Controller
{
    public function ratehere(Request $request){
        $todayDate = date('m/d/Y');
        $rate = new rate;
        
        $this->validate($request,[
            'empName' => 'required|max:100',
            'Rating' => 'required',
            'experience' => 'required',
            'date' => 'required|after_or_equal:'.$todayDate ,
        ]);

        
        $rate->Date=$request->input('date');
        $rate->EmpName=$request->input('empName');
        $rate->Rating=$request->input('Rating');
        $rate->Experience='experience';

        $rate->save();
        
        return redirect("Rate")->with('status','You are Successfully Rated');
    }

    public function RateView(){
        $rates = rate::all();;
        return view('ViewRate', compact('rates')); 
    }
}
