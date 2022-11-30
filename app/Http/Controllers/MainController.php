<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }
    function save(Request $request){ 
        
        //Validate requests
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'age'=>'required',
            'height'=>'required',
            'weight'=>'required',
            'gender'=>'required',
            'password'=>'required|min:5|max:12'
        ]);

         //Insert data into database
         $user = new User;
         $user->name = $request->name;
         $user->email = $request->email;
         $user->age = $request->age;
         $user->height = $request->height;
         $user->weight = $request->weight;
         $user->gender = $request->gender;
         $user->password = Hash::make($request->password);
         $save = $user->save();

         if($save){
            return back()->with('success','New User has been successfully added to database');
         }else{
             return back()->with('fail','Something went wrong, try again later');
         } 
    }

    function check(Request $request){
        //Validate requests
        $request->validate([
             'email'=>'required|email',
             'password'=>'required|min:5|max:12'
        ]);

        $userInfo = User::where('email','=', $request->email)->first();

        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
            //check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('user.dashboard'); 

            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }

    function dashboard(){
        return view('user.dashboard');
    }

    function logout(){
        if(session()->has('LoggedUser')){
        session()->pull('LoggedUser');
        return redirect('/index'); 
    }
        }

        
}
        


