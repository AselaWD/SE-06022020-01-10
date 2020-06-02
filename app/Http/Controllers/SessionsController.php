<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

use  App\User;
 
class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }
    
    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        $user = User::where('email', '=', request(['email']))->get();
        return response()->json(['response' => 'success', 'user' => $user]);
        // return User::where('email', '=', request(['email']));
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/games');
    }
}