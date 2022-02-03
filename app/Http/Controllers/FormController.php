<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form()
    {
        return view('form');
    }
    public function formin(Request $request)
    {   
         Customer::create([
            'name' => $request['name'],
            'father_name' => $request['father_name'],
            'mother_name' => $request['mother_name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'home_address' => $request['home_address']
        ]);
        return view('home');
    }
    public function user()
    {
        $cruds = Customer::all();  
        return view('user',compact('cruds'));  

    }
    public function delete($id)  
    {  
      $data = Customer::find($id);
      $data->delete();
      return redirect('user');
    }  
    public function showdata($id)  
    {  
        $data = Customer::find($id);
        return view('edit',['data'=>$data]);
    }  

    public function update(Request $request)  
    {  
        $data = Customer::find($request->id);
        $data->name=$request->name;
        $data->father_name=$request->father_name;
        $data->mother_name=$request->mother_name;
        $data->phone=$request->phone;
        $data->email=$request->email;
        $data->home_address=$request->home_address;
        $data->save();
        return redirect('user');
    }  

}