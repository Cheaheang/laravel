<?php

namespace App\Http\Controllers;

use App\Models\first;
use App\Models\second;
use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function display(){
        $seconds = first::all()->toArray();
            return view('first.display',compact('seconds'));
    }
    public function saveItem(Request $request){
//::info(json_encode($request->all()));
        $second = new second;
        $second->name =$request->name;
        $second->password= $request->password;
        $second->save();    
        return view('welcome'); 
        //dd($request->name);
    }
}
