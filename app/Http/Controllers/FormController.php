<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Config;

class FormController extends Controller
{
    public function form()
    {
        return view('form');
    }
    public function formin(UserRequest $request)
    {   
         Customer::create([
            'name' => $request['name'],
            'father_name' => $request['father_name'],
            'mother_name' => $request['mother_name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'home_address' => $request['home_address']
        ]);
        return response()->json([
         'success'=>true,
         'message'=>'Insert data successfully'
        ]
        );
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

    public function config()
    {
        $data = Config('app.name1');
        return view('userin',compact('data'));

    }
}