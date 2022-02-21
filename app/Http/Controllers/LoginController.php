<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('backend.login.login');
    }
    public function store(Request $request)
    {
        $email     = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect()->route('admin.dashboard');
        }else{
            return "đăng nhập thất bại";
        };
    }
    public function logout(){
        
        Auth::logout();
        return redirect()->route('LoginController.index');
    }
}
