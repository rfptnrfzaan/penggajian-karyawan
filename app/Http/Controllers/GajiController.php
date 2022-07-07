<?php

namespace App\Http\Controllers;

use App\Libraries\GajiCalculator;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class GajiController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('gaji/gaji');
    }

    public function detail(Request $request){
        $karyawan = Karyawan::find($request->id_karyawan);
        $date = Carbon::parse($request->bulan);

        $gaji = GajiCalculator::CalculateGaji($karyawan, $date->year, $date->month);
        dd($gaji);
    }
}
