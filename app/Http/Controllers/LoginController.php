<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Libraries\TaxCalculator;
use App\Libraries\GajiCalculator;
use Carbon\Carbon;

class LoginController extends Controller
{
    public function index (){
        return view('login/login');
    }

    public function login(Request $request){
        $input = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($input)){
            return redirect('dashboard');
        }else{
            return redirect('/');
        }
    }

    public function dashboard(){
        $jmlKaryawan = Karyawan::count();
        $now = Carbon::now();
        $bulan = $now->month;
        $tahun = $now->year;

        $karyawan = Karyawan::all();
        $totalTax = 0;
        $totalGaji = 0;

        $dataPph = [];

        foreach ($karyawan as $data) {
            $gaji = GajiCalculator::CalculateGaji($data, $bulan, $tahun);
            $netto = TaxCalculator::CalculateNettoWithBiayaJabatan($gaji['netto']);
            $ptkp =  TaxCalculator::CalculatePTKP($data);
            $pkp = TaxCalculator::CalculatePKP($netto['netto_year'], $ptkp['ptkp']);
            $pph21 = $pkp['tax_month'];
            $gajiterima = $netto['netto_month'] - $pph21;

            $totalTax += $pph21;
            $totalGaji += $gajiterima;
            array_push($dataPph, [

            ]);
        }

        return view('welcome', compact('jmlKaryawan', 'totalTax', 'totalGaji', 'now'));
    }
}
