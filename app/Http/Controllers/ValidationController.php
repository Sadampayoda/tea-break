<?php

namespace App\Http\Controllers;

use App\Http\Requests\{ValidationLoginRequest,ValidationRegisterRequest};
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ValidationController extends Controller
{
    public function UILogin()
    {
        return view('validasi.login');
    }

    public function ValidationLogin(ValidationLoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        
        if(Auth::attempt($credentials)){

            $request->session()->regenerate();
 
            return redirect()->route('home')->with('success','Daftar akun baru anda telah berhasil');
            
        }
        return redirect()->route('login')->with('failed','Daftar akun telah gagal');
    }
    
    public function ValidationRegister(ValidationRegisterRequest $request)
    {
        
        
        
        User::created([
            'email' => $request->emails,
            'password' => bcrypt($request->passwords)
        ]);
        
        return redirect()->route('login')->with('success','Daftar akun baru anda telah berhasil');
        
        
    }
}
