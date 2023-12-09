<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;

class UserController extends Controller
{
    public function create()
    {
        return view("users.register");
    }

    public function login()
    {
        return view("users.login");
    }

    public function store(RegisterUserRequest $request)
    {
        $validatedData = $request->validated();

        $creaUser = User::create($validatedData);

        if ($creaUser) {
            auth()->login($creaUser);

            return redirect('/dashboard');
        }

    }

    public function logout(Request $request)
    {
       auth()->logout();
       $request->session()->invalidate();
       $request->session()->regenerateToken();

       return redirect('/')->with("message", "You have been logged out!");

    }

    public function authenticate(LoginUserRequest $request)
    {
       if (auth()->attempt($request->only("email","password"))) {
         $request->session()->regenerate();

         return redirect("/dashboard");
       }

       return back()->withErrors(["email"=> "Invalid Credentials"])->onlyInput('email');
    }
}
