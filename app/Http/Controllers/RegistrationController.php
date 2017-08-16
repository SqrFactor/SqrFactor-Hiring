<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use Session;
use Mail;


class RegistrationController extends Controller
{
    //
        
    public function index(){
        return view('/register');
    }
    
    public function create(Request $request){
        
         $this->validate(request(),[
            'name'=> 'required',
            'email'=> 'required | email',
             'phone'=> 'required | numeric',
             'position' => 'required',
             'college' => 'required',
             'year' => 'required'
        ]); 
        
        $user = Registration::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'college' => request('college'),
            'year' => request('year'),
            'github' => request('github'),
            'linkedin' => request('linkedin'),
            'position' => request('position'),
            'portfolio' => request('portfolio'),
            
            
        ]);
        
        //dd($user->email);
        
        Mail::to($user)->send(new \App\Mail\Thankyou);
        return redirect('/success');
    }
}
