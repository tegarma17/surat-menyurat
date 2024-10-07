<?php

namespace App\Http\Controllers;

use App\Models\tbwarga;
use Illuminate\Http\Request;

class data_warga extends Controller
{
    public function rt50()
    {
        $angka = '50';
        $warga = tbwarga::where('rt', '=', $angka)->get();
        return view('data-warga', [
            'warga' => $warga,
            'angka' => $angka
        ]);
    }
    public function rt51()
    {
        $angka = '51';
        $warga = tbwarga::where('rt', '=', $angka)->get();
        return view('data-warga', [
            'warga' => $warga,
            'angka' => $angka
        ]);
    }
    public function rt52()
    {
        $angka = '52';
        $warga = tbwarga::where('rt', '=', $angka)->get();
        return view('data-warga', [
            'warga' => $warga,
            'angka' => $angka
        ]);
    }
    public function rt53()
    {
        $angka = '53';
        $warga = tbwarga::where('rt', '=', $angka)->get();
        return view('data-warga', [
            'warga' => $warga,
            'angka' => $angka
        ]);
    }
    public function rt54()
    {
        $angka = '54';
        $warga = tbwarga::where('rt', '=', $angka)->get();
        return view('data-warga', [
            'warga' => $warga,
            'angka' => $angka
        ]);
    }
    public function rt55()
    {
        $angka = '55';
        $warga = tbwarga::where('rt', '=', $angka)->get();
        return view('data-warga', [
            'warga' => $warga,
            'angka' => $angka
        ]);
    }
    public function rt56()
    {
        $angka = '56';
        $warga = tbwarga::where('rt', '=', $angka)->get();
        return view('data-warga', [
            'warga' => $warga,
            'angka' => $angka
        ]);
    }
}
