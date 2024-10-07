<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class data_warga extends Controller
{
    public function rt50()
    {
        $angka = '50';
        $warga = Warga::where('rt', '=', $angka)->get();
        return view('data-warga', [
            'warga' => $warga,
            'angka' => $angka
        ]);
    }
    public function rt51()
    {
        $angka = '51';
        $warga = Warga::where('rt', '=', $angka)->get();
        return view('data-warga', [
            'warga' => $warga,
            'angka' => $angka
        ]);
    }
    public function rt52()
    {
        $angka = '52';
        $warga = Warga::where('rt', '=', $angka)->get();
        return view('data-warga', [
            'warga' => $warga,
            'angka' => $angka
        ]);
    }
    public function rt53()
    {
        $angka = '53';
        $warga = Warga::where('rt', '=', $angka)->get();
        return view('data-warga', [
            'warga' => $warga,
            'angka' => $angka
        ]);
    }
    public function rt54()
    {
        $angka = '54';
        $warga = Warga::where('rt', '=', $angka)->get();
        return view('data-warga', [
            'warga' => $warga,
            'angka' => $angka
        ]);
    }
    public function rt55()
    {
        $angka = '55';
        $warga = Warga::where('rt', '=', $angka)->get();
        return view('data-warga', [
            'warga' => $warga,
            'angka' => $angka
        ]);
    }
    public function rt56()
    {
        $angka = '56';
        $warga = Warga::where('rt', '=', $angka)->get();
        return view('data-warga', [
            'warga' => $warga,
            'angka' => $angka
        ]);
    }
}
