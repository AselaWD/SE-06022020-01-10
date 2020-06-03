<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

use  App\User;
use  App\Product;
 
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
    public function price()
    {
        $products = Product::orderBy('type', 'DESC')->get()->toArray();;
        return view('product.index', compact('products'));
    }
    public function type()
    {
        $products = Product::orderBy('type', 'DESC')->get()->toArray();
        return view('product.index', compact('products'));
    }
    public function priceAsc()
    {
        $products = Product::orderBy('type', 'ASC')->get()->toArray();;
        return view('product.index', compact('products'));
    }
    public function typeAsc()
    {
        $products = Product::orderBy('type', 'ASC')->get()->toArray();
        return view('product.index', compact('products'));
    }
}