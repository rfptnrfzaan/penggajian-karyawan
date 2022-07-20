<?php

namespace App\Libraries;

use App\Models\Karyawan;

class TaxCalculator {

    const LEVEL = [
        5 => 60000000,
        15 => 190000000,
        25 => 250000000,
        30 => 4500000000,
        35 => 99999999999
    ];

    public static function CalculatePTKP(Karyawan $karyawan){
        $steps = [];

        $pribadi = 54000000;
        array_push($steps, ['step' => "Wajib Pajak Pribadi", 'result' => $pribadi]);

        $menikah = 0;
        if($karyawan->status_pernikahan == "Menikah"){
            $menikah = 4500000;
            array_push($steps, ['step' => "Menikah", 'result' => $menikah]);
        }
        $tanggungan = $karyawan->tanggungan * 4500000;
        array_push($steps, ['step' => "Tanggungan ({$karyawan->tanggungan})", 'result' => $tanggungan]);

        $ptkp = $pribadi + $menikah + $tanggungan;
        return ['ptkp' => $ptkp, 'steps' => $steps];
    }

    public static function CalculateBiayaJabatan(int $amount){
        $biaya = 0.05 * $amount;
        return ($biaya > 500000) ? 500000 : $biaya;
    }

    public static function CalculateNettoWithBiayaJabatan(int $netto){
        $netto_month = $netto - TaxCalculator::CalculateBiayaJabatan($netto);

        return ['netto_month' => $netto_month, 'netto_year' => $netto_month * 12];
    }




    public static function CalculatePKP(int $amount, int $ptkp){
        $steps = [];

        if($amount < $ptkp) {
            $steps = ['step' => '< Rp. '.number_format($ptkp, 0, ',', '.').',00', 'result' => 0];
            return ['pkp' => 0,'tax' => 0, 'tax_month' => 0, 'steps' => [$steps]];
        }

        $pkp = $amount - $ptkp;
        $temp = $pkp;
        $tax = 0;

        foreach (TaxCalculator::LEVEL as $percentage => $limit) {
            if($temp < 0) break;

            if($temp < $limit){
                $result = ($percentage * $temp / 100);
                $step = "$percentage% x Rp. ".number_format($temp, 0, ',', '.').",00";
            }else{
                $result = ($percentage * $limit / 100);
                $step = "$percentage% x Rp. ".number_format($limit, 0, ',', '.').",00";
            }

            array_push($steps, ['step' => $step, 'result' => $result]);
            $tax = $tax + $result;
            $temp = $temp - $limit;
        }

        return ['pkp' => $pkp, 'tax' => $tax, 'tax_month' => $tax/12, 'steps' => $steps];
    }

}
