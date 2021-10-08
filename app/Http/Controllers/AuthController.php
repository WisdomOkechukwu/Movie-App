<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }
    public function register()
    {
        return view('Auth.register');
    }
    public function store(Request $request)
    {
        // ['required',Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised()]
        $this->validate($request,[
            'name'=> 'required|max:225',
            'age'=> 'required|max:100|numeric',
            'email'=>'required|email|unique:users,email',
            'password'=>['required','confirmed',Password::min(8)->mixedCase()->uncompromised()]

        ]);

        User::create([
            'name'=>$request->name,
            'age'=>$request->age,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        
        Auth::attempt($request->only('email','password'));
        if(session('id')){
            return redirect()->action(
                [MovieController::class, 'findMovie'], ['id' => session('id')]
            );
        }
        else {
            return redirect()->route('home');
        }
        
    }

    public function SignIn(Request $request)
    {

        $this->validate($request,[
            
            'email'=>'required|email',
            'password'=>'required'

        ]);

        if(!Auth::attempt($request->only('email','password'))){
            return back()->with('status','Invalid login details');
        }

        
        if(session('id')){
            return redirect()->action(
                [MovieController::class, 'findMovie'], ['id' => session('id')]
            );
        }
        else {
            return redirect()->route('home');
        } 
    }

    public function Logout(Request $request){
        Auth::logout();
        $request->session()->flush();
        return redirect()->route('home');

    }
}
