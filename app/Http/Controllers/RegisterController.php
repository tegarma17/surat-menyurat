<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\Rules\Password;
use App\Models\tbwarga;
use Illuminate\Validation\ValidationExceptio;

class RegisterController extends Controller
{
    public function  index()
    {
        return view('layout/register');
    }

    public function login()
    {
        return view('layout/login');
    }
    public function store(Request $request)
    {
        // $validate = $request->validate([
        //     'nama' => 'required|uppercase',
        //     'email' => 'required',
        //     'username' => 'required|unique:post',
        //     'password' => Password::min(5)
        //         ->letters()
        //         ->numbers(),
        //     'tempat_lahir' => 'required',
        //     'tgl_lahir' => 'required',
        //     'rt' => 'required',
        //     'rw' => 'required'
        // ]);
        tbwarga::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'rt' => $request->rt,
            'rw' => $request->rw,
        ]);
        Alert::success('Congrats', 'You\'ve Successfully Registered');
        return redirect()->route('login');
    }
}
