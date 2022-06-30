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
        $pribadi = 54000000;
        $menikah = ($karyawan->status_pernikahan == "Menikah") ? 4500000 : 0;
        $tanggungan = $karyawan->tanggungan * 4500000;

        return $pribadi + $menikah + $tanggungan;
    }


    public static function CalculatePKP(int $amount, int $ptkp){
        if($amount < $ptkp) return ['pkp' => 0,'tax' => 0, 'steps' => ['step' => '< Rp. '.number_format($ptkp, 0, ',', '.').',00', 'result' => 0]];

        $statement = [];
        $temp = $amount - $ptkp;
        $tax = 0;

        foreach (TaxCalculator::LEVEL as $percentage => $limit) {
            if($temp < 0) break;

            if($temp < $limit){
                $result = ($percentage * $temp / 100);
                $string = "$percentage% x Rp. ".number_format($temp, 0, ',', '.').",00";
            }else{
                $result = ($percentage * $limit / 100);
                $string = "$percentage% x Rp. ".number_format($limit, 0, ',', '.').",00";
            }

            array_push($statement, ['step' => $string, 'result' => $result]);
            $tax = $tax + $result;
            $temp = $temp - $limit;
        }

        return ['pkp' => $amount - $ptkp,'tax' => $tax, 'steps' => $statement];
    }

}
