<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('index');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials['email'])->first();

        if ($user && $user->password === $credentials['password']) {
            Auth::login($user);
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function dashboard()
    {
        $attemptSets = DB::table('hcps')
        ->where('attempt', 1)
        ->where('users', Auth::user()->id) 
        ->orderBy('created_at', 'desc') // Replace 'created_at' with your column
        ->get();
        return view('dashboard', ['attemptSets' => $attemptSets]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function registerhcp(Request $request)
    {
        return view('registerhcp');
    }
    // YourController.php
    public function handleFormSubmission(Request $request)
    {
        // Validate and process the form submission
        $validated = $request->validate([
            'dvc_code' => 'required|string',
            'hcp_name' => 'required|string',
            'qualification' => 'required|string',
            'city' => 'required|string',
            'hospital' => 'required|string',
        ]);

        // Process the data, save to database, etc.

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
