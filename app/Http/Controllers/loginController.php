<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class loginController extends Controller
{
    //
    public function login(Request $request){
        $credencias = $request->validate([
            "email"=> ["required","email"],
            "password"=> ["required"],
        ]);
        // Authenticate a regular user
        if(auth()->guard('web')->attempt(['email' => $request->email, 'password' => $request->password])){
        // User is logged in
        return redirect()->route('admin');
        }
        // Authenticate an administrator
        if(auth()->guard('prof')->attempt(['email' => $request->email, 'password' => $request->password])){
        // Admin is logged in
            return redirect()->route('mini');
        }

        
        if(Auth::guard('aluno')->attempt(['email' => $request->email, 'password' => $request->password])){
            // Admin is logged in
            return redirect()->route('boletim');
        }

        return redirect()->route('telalogin')->with('error',"email ou senha invalida");
        
    }

    public function logout(){
        Auth::guard('web')->logout();
        Auth::guard('prof')->logout();
        Auth::guard('aluno')->logout();
        return redirect()->route('telalogin');
    }
}

