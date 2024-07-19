<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekHargaController extends Controller
{
    public function index()
    {
        return view('cekharga');
    }

    public function hitung(Request $request)
    {
        $panjang = $request->input('panjang');
        $lebar = $request->input('lebar');
        $kategori = $request->input('kategori');

        switch ($kategori) {
            case 'A':
                $harga_per_meter = 4500000;
                break;
            case 'B':
                $harga_per_meter = 3500000;
                break;
            case 'C':
                $harga_per_meter = 2500000;
                break;
            default:
                $harga_per_meter = 0;
        }

        $luas = $panjang * $lebar;
        $total_harga = $luas * $harga_per_meter;

        return view('cekharga', [
            'total_harga' => $total_harga,
            'panjang' => $panjang,
            'lebar' => $lebar,
            'kategori' => $kategori
        ]);
    }
}
