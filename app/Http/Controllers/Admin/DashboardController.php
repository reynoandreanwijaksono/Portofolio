<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function loginForm()
    {
        return view('admin.login');
    }
    
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Untuk sementara pakai logic sederhana
        if ($credentials['email'] === 'admin@reyno.com' && $credentials['password'] === 'password123') {
            session(['admin_logged_in' => true]);
            return redirect()->route('admin.dashboard');
        }
        
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
    
    public function index()
    {
        return view('admin.dashboard');
    }
    
    public function logout(Request $request)
    {
        session()->forget('admin_logged_in');
        return redirect()->route('admin.login');
    }
}