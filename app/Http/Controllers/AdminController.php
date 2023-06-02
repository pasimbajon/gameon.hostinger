<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function index(){
        return view('admin.adminLogin');
    }

    public function Dashboard(){
        return view('admin.index');
    }

    public function Login(Request $request){
        //dd($request->all());
        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])){
            if(Auth::guard('admin')->user()->role == 1){
                return redirect()->route('admin.dashboard')->with('error','Success!');
            }else{
                return back()->with('error','Not an Admin');
            } 
            
        }else{
            return back()->with('error','Invalid Email or Password.');
        }
    }

    public function adminLogout(){
        Auth::guard('admin')->logout();
        return redirect()->route('adminLogin')->with('error','Logout Success!');
    }
}
