<?php

namespace App\Http\Controllers;
//use Mail;
use Illuminate\Http\Request;
//use App\User;
use App\Mail\Welcome;
use App\Http\Requests\RegistrationRequest;
class RegistrationController extends Controller
{
    //
    public function create()
    {
    	return view('registration.create');
    }
    public function store(RegistrationRequest $request)
    {
    	//validate the form.
    	/*$this->validate(request(),[
    		'name'=>'required',
    		'email'=>'required|email',
    		'password'=>'required|confirmed'

    	]);*/

    	//create and save the user.
    	/*$user=User::create(request(['name','email','password']));*/
       /* $data = request()->all();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    	//Sign them in.
    	auth()->login($user);

        \Mail::to($user)->send(new Welcome($user));*/
    	//Redirect to the home page.
        $request->persist();
        session()->flash('message','Thanks so much for registering');
    	return redirect()->home();
    }
}
