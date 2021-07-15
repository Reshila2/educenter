<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendForm;

class FormController extends Controller
{
    //
public function send(Request $request){
    $this->validate($request,[
        'name12'  =>  'required',
        'email12' =>  'required|email',
        'subject12' => 'required',
        'message12'   =>  'required'
    ]);
    $data=array(
        'name12' =>$request->name12,
        'email12'=>$request->email12,
        'message12'=>$request->message12,
        'subject12'=>$request->subject12
    );
    Mail::to('alisher.izzatullyev@gmail.com')->send(new SendForm($data));
    
     return back()->with('success','');
    }
}
