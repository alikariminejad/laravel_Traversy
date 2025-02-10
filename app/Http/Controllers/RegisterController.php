<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;


class RegisterController extends Controller
{
    // @desc Show register form
    // @route GET /register
    public function register(): View
    {
        return view('auth.register');
    }

    // @desc store User in database
    // @route POST /register
    public function store(Request $request): RedirectResponse
    {
        $ValidatedData = request()->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Hash password
        $ValidatedData['password'] = Hash::make($ValidatedData['password']);

        // Create User
        $user = User::create($ValidatedData);
        return redirect()->route('login')->with('success', 'You are registered and can log in!');
    }
}
