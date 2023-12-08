<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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

            return redirect('/')->with("message", "Registration was successfull");
        }

        dd($request->all());

    }
}
