<?php

namespace App\Libraries;

use App\Models\Karyawan;

class GajiCalculator {

    public static function CalculateGaji(Karyawan $karyawan){
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

    public static function CalculateJaminan(Karyawan $karyawan){
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

    public static function CalculatePengurang(Karyawan $karyawan){
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

}
