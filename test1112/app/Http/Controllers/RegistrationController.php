<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use App\User;
use Illuminate\Support\Facades\Hash;


class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }

    public function store()
    {
    	// $form->persist();

    	session()->flash('message', 'Thanks so much for singing up!'); 

    	session('message','Here is a default message');

    	$this->validate(request(), [
    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|confirmed'

    	]);
    	

    	$user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password'))
        ]);


    	auth()->login($user);

    	\Mail::to($user)->send(new Welcome($user));

    	return redirect()->home();
    }

}
