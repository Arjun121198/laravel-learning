<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Auth\Events\Validated;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }    
    public function home()
    {
        return view('home');
    }


    public function registeruser(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
         Register::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password']
        ]);
        
    }
    public function loginuser(Request $request)
    {
      $this->validate($request,[
          'email' => 'required|email',
          'password' => 'required|alphaNum|min:3'

      ]);


      $user = Register::where('email',$request->email)->where('password',$request->password)->first();


      if(isset($user))
      { 
          return view('home');

      }
      else
      {
        return back()->with('error','wrong Login Details');
      }
    }
   

}