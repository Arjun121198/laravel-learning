<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Hash;

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

    public function registeruser(Request $request)
    {
        $this->validate($request,[
             'name' => 'required',
            'email' => 'required|email|unique:registers',
            'password' => 'required|alphaNum|min:5|max:12'
        ]);
       $user = Register::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);
        $request->session()->put('user_id',$user->id);

        return redirect('/home')->with('success','Registered Successfully');
    }
    public function loginuser(Request $request)
    {
      $this->validate($request,[
          'email' => 'required|email',
          'password' => 'required|alphaNum|min:5|max:12'

      ]);


      $user = Register::where('email',$request->email)->first();
       if(!$user)
       {
        return back()->with('fail','We do not recognize your email');
       }
       else
       {

       }
       if(Hash::check($request->password,$user->password))
       {
        $request->session()->put('user_id',$user->id);
        dd(session()->get('user_id'));
        return redirect('home');
       }
       else
       {
           return back()->with('fail','password is incorrect');

       }
    }

    public function home()
    {
        return view('home');
        // return view('home');
    }
    public function logout()
    {
        if(session()->has('user_id'))
        {
            session()->pull('user_id');
            return redirect('login');
        }
    }

} 