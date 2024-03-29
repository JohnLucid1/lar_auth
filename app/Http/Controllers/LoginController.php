<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function logout (Request $request) {
        Auth::logout();
        
        $request->session()->invalidate();
        return redirect(route("login"));
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'username' => 'required',
            'password'=> 'required',
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->intended(route('admin'));
        }
        
        return back()->with('error','wrong credentials');
    }
    public function index(){
        return view('login');
    }
}
