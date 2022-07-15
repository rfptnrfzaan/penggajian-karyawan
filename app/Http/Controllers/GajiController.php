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

        return view('gaji/gaji');
    }

    public function lihat(Request $request)
    {
        $date = Carbon::parse($request->bulan);

        $karyawan = Karyawan::all();
        $bulan = $date->format('m');
        $tahun = $date->format('Y');

        return view('gaji/lihat', compact('karyawan', 'bulan', 'tahun','date'));
    }


    public function detail($tahun, $bulan, $id_karyawan){
        $karyawan = Karyawan::find($id_karyawan);
        $date = Carbon::createFromDate($tahun, $bulan, 1);

        $gaji = GajiCalculator::CalculateGaji($karyawan, $tahun, $bulan);
        return view('gaji/data_gaji', compact('karyawan', 'date', 'tahun', 'bulan', 'gaji' ));

    }
}
