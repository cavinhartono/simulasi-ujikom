<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth');
    }

    public function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate(
            [
                # cek
                'email' => 'required',
                'password' => 'required'
            ],
            [
                # Jika gagal
                'email.required' => 'Email harus disesuaikan',
                'password.required' => 'Password harus disesuaikan',
            ]
        );

        $info = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($info)) {
            return redirect('/')->with('success', 'Login is success!');
        } else {
            return redirect('/auth')->withErrors('Email dan Password tidak sesuai');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/auth');
    }

    public function register(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required'
            ],
            [
                'name.required' => 'Nama harus disesuaikan',
                'email.required' => 'Email harus disesuaikan',
                'email.email' => 'Email harus valid',
                'email.unique' => 'Email sudah ada, silahkan cari yang baru',
                'password.required' => 'Password harus disesuaikan',
            ]
        );

        $createAuth = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ];

        User::create($createAuth);

        $info = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($info)) {
            return redirect('/')->with('success', 'Register is success!');
        } else {
            return redirect('/auth')->withErrors('Email dan Password harus disesuaikan');
        }
    }
}
