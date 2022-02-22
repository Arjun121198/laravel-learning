<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Config;

class FormController extends Controller
{
    //this function is used to 
    public function userapi()
    { 
        $cruds = Customer::all();  
        return response()->json(['body'=>$cruds,'message'=>'user details','status'=>true]);
    }

    public function deleteapi($id)  
    {  
      $data = Customer::find($id);
      $data->delete();
      return response()->json(['message'=>'user details delete','status'=>true]);
    }  

    public function finddata($id)  
    {  
        $data = Customer::find($id);
        return response()->json(['body'=>$data,'message'=>'Find user details ','status'=>true]);
    }  


    public function updatecustomer(Request $request)  
    {  
        $data = Customer::find($request->id);
        $data->name=$request->name;
        $data->father_name=$request->father_name;
        $data->mother_name=$request->mother_name;
        $data->phone=$request->phone;
        $data->email=$request->email;
        $data->home_address=$request->home_address;
        $data->save();
        return response()->json(['body'=>$data,'message'=>'user details update','status'=>true]);
    }  
}