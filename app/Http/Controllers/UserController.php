<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function create(){
        return view('user.create');
    }
    public function store(Request $request){
        $request->validate([
         
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password'=>'required|confirmed',
            'avatar'=>'nullable|image',
        ]);
        if($request->hasFile('avatar')){
            $folder=date('Y-m-d');
            $avatar=$request->file('avatar')->store("images/{$folder}");
        }
         $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'avatar'=>$avatar ?? null,
           ]);
           session()->flash('success','successful registration');
           Auth::login($user);
           return view('Home');
    }

    public function loginForm(){
        return view('user.login');
    }
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password'=>'required',
        ]);

        if(Auth::attempt([
            'email' =>$request->email,
            'password'=>$request->password,

        ]))
        {
            return view('Home');
        }
        return redirect()->back()->withInput($request->only('email', 'password'))->withErrors([
            'approve' => 'Wrong password or email.',
        ]);
        
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login.create');
    }
}
