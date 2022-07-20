<?php

namespace App\Http\Controllers;

use App\Libraries\GajiCalculator;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Libraries\TaxCalculator;

class PphController extends Controller
{
    public function index(){
    return view('perhitungan/index');
    }

    public function lihat(Request $request)
    {
        $date = Carbon::parse($request->bulan);

        $karyawan = Karyawan::all();
        $bulan = $date->month;
        $tahun = $date->year;

        return view('perhitungan/table', compact('karyawan', 'bulan', 'tahun', 'date'));
    }

    public function detail($tahun, $bulan, $id_karyawan){
        $karyawan = Karyawan::find($id_karyawan);
        $gaji = GajiCalculator::CalculateGaji($karyawan, $tahun, $bulan);
        $netto = TaxCalculator::CalculateNettoWithBiayaJabatan($gaji['netto']);
        $ptkp =  TaxCalculator::CalculatePTKP($karyawan);
        $pkp = TaxCalculator::CalculatePKP($netto['netto_year'], $ptkp['ptkp']);
        $pph21 = $pkp['tax_month'];
        $gajiterima = $gaji['netto']-$pph21;
        $biaya = TaxCalculator::CalculateBiayaJabatan($gaji['netto']);

        $date = Carbon::createFromDate($tahun, $bulan, 1);
        return view('perhitungan/pph', compact('karyawan', 'date', 'tahun', 'bulan', 'gaji', 'netto', 'ptkp', 'pkp', 'pph21', 'gajiterima', 'biaya' ));

    }

}
