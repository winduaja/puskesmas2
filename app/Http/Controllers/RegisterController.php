<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class RegisterController extends Controller
{
    public function index()
    {
        return view("register.index",[
            "title" => "Register",
            "active" => "register"
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            "name" => "required|max:255",
            "username" => ["required", "min:3", "max:225", "unique:users"],
            "email" => "required|email:dns|unique:users",
            "password" => "required|min:5|max:255"
        ]);

        //$validateData["password"] = bcrypt($validateData["password"]);

        $validateData["password"] = Hash::make($validateData["password"]);

        User::create($validateData);
        //$request->session()->flash("success", "registration succesfully!! tolong login");

        return redirect("/login")->with ("success", "registration succesfully!! tolong login");

    }
}
