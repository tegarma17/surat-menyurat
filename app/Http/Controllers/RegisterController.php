<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Warga;


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
        // validation input
        // $validate = $request->validate(
        //     [
        //         'nama' => ['required'],
        //         'email' => ['required'],
        //         'username' => ['required'],
        //         'password' => ['required|min:4'],
        //         'tempat_lahir' => ['required'],
        //         'tgl_lahir' => ['required'],
        //         'rt' => ['required'],
        //         'rw' => ['required'],
        //         'foto' => ['nullable|image|mimes:jpg,png,jpeg|max:2048'],
        //     ],
        // );

        // file foto
        if (!empty($request->foto)) {
            $fileName = 'foto-' . uniqid() . ',' . $request->foto->extension();
            $request->foto->move(public_path('image'), $fileName);
        } else {
            $fileName = 'nophoto.jpg';
        }

        Warga::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'foto' => $fileName

        ]);
        Alert::success('Congrats', 'You\'ve Successfully Registered');
        return redirect()->route('login');
    }
}
