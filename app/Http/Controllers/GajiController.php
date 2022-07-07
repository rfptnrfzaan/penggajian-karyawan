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
        # code...
    }

    public function lihat(Request $request){
        $karyawan = Karyawan::find($request->id_karyawan);
        $date = Carbon::parse($request->bulan);

        $gaji = GajiCalculator::CalculateGaji($karyawan, $date->year, $date->month);
        dd($gaji);
    }
}
