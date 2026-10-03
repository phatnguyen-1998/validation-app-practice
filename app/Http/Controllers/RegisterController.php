<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{
    public function store(RegisterRequest $request)
    {
        $validated = $request->validated();
        $user = User::create([
            "name" => $validated["name"],
            "email" => $validated["email"],
            "password" => $validated["password"],
        ]);

        return view("register_success", compact("user"));
    }
    public function create()
    {
        return view("register");
    }
}
