<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function prosesLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $login = trim($request->input('username'));
        $password = $request->input('password');

        $user = User::where('username', $login)
            ->orWhere('email', $login)
            ->first();

        if (!$user || !Hash::check($password, $user->password)) {
            return back()
                ->withErrors([
                    'username' => 'Username/email atau password salah.'
                ])
                ->withInput($request->only('username'));
        }

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->route('admin.dashboard');
    }

    public function store(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}