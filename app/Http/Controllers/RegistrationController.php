<?php
 
namespace App\Http\Controllers;

use  App\User;
 
use Illuminate\Http\Request;
 
class RegistrationController extends Controller
{
    public function create()
    {
    
        return view('registration.create');


    }
    public function store()
    {
        // return "hello";

        $error = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'address' => 'required',
            'contactNO' => 'required'
        ]);
        // $error = $this->validate(request(), [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required|confirmed',
        //     'address' => 'required',
        //     'contactNO' => 'required'
        // ]);
        // return "hello";
        // return $error;
        $user = User::create(request(['name', 'email', 'password','address','contactNO']));
        
        auth()->login($user);
        // return "user created";
        // return "hello";
        return redirect()->to('/register')->with('success', 'Data Added');
    }
}