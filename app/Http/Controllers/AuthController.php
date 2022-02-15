<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyDemoMail;
use App\Mail\MailNotify;


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
    public function reset()
    {
        return view('resetpwd');
    }
    public function opennewpassword($id)
    {
        
     return view('/createnewpassword',compact('id'));
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

        $details = [
            'title' => 'First  mail',
            'url' => 'http://localhost:8000/home'
        ];
  
        Mail::to($user->email)->send(new MyDemoMail($details));
        $request->session()->put('user_id',$user->id);
        return redirect('/register')->with('success','Registered Successfully');
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
        if(Hash::check($request->password,$user->password))
        {
            Session::put('user_id',$user->id);
            return redirect('/home');
        }
        else
        {
            return back()->with('fail','password is incorrect');

        }
        
    }

    public function search(Request $request)
    {
        
        $user = Register::where('email',$request->email)->first();
       if($user)
       {
        $details = [
            'title' => 'First  mail',
            'url' => 'http://localhost:8000/opennewpassword/'.$user->id,
        ];
        Mail::to($user->email)->send(new MyDemoMail($details));
       }
       else
       {
           return view('/register')->with('fail','account not found pls register');
       }
       }
       public function createpasswordnew(Request $request)
        {
        if($request->password == $request->newpassword)
        {
            
            $user = Register::where('id',$request->id)->first();
            
            $user->password = Hash::make($request->password);
            $user->save();
        return view('login');
        }
        else
        {
            return back()->with('fail','password is incorrect');
        }
       }

    public function logout()
    {
        // dd(Session::get('user_id'));
        if(session()->has('user_id'))
        {
            // dd(Session::get('user_id'));
            session()->pull('user_id');
            // dd(Session::get('user_id'));
            return redirect('login');
        }
    }

}              





