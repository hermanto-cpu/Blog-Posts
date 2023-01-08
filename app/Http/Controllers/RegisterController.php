<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' =>'required|email:dns|unique:users',
            'password' => ['required', 'min:5' ,'max:255']
        ]);

       $validatedData['password'] = Hash::make($validatedData['password']);
        
        User::create($validatedData);
        // dd('registrasi berhasil!!');        
        // $request->session()->flash('succees', 'Registrasi berhasil! Silahkan login');
        return redirect('/login')->with('succees', 'Registrasi berhasil! Silahkan login');

    }
}
