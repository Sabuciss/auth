<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;


class SessionController extends Controller
{
    public function destroy()
    {
        Auth::logout();
        return redirect("/");
    }

    public function create()
    {
        return view("auth.login");
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "email" => ['required', 'email'],
            "password" => ["required"]
        ]);

        Auth::attempt($validated);
        return redirect("/");
    }

   
}
