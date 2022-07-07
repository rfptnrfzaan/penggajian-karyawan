<?php

namespace App\Libraries;

use App\Models\Karyawan;

class GajiCalculator {

    public static function CalculateGaji(Karyawan $karyawan, $tahun, $bulan){
        $gaji = $karyawan->gaji_pokok;
        $hadir = $karyawan->jumlahHadir($tahun, $bulan);
        $lembur = $karyawan->jumlahGajiLembur($tahun, $bulan);
        $spj = $karyawan->jumlahSPJ($tahun, $bulan);

        $makan = $hadir * $karyawan->tunjangan_makanan;
        $transport = $hadir * $karyawan->tunjangan_transportasi;

        $jkk = $gaji * 0.24 / 100;
        $jkm = $gaji * 0.3 / 100;
        $jaminan = $jkk + $jkm;

        $bruto = $gaji + $makan + $transport + $lembur + $spj + $jkk + $jkm;

        $jht = $gaji * 2 / 100;

        $netto = $bruto - $jht;

        return [
            "gaji_pokok" => $gaji,
            "tunjangan_makan" => $makan,
            "tunjangan_transport" => $transport,
            "lembur" => $lembur,
            "spj" => $spj,
            "jkk" => $jkk,
            "jkm" => $jkm,
            "jaminan" => $jaminan,
            "bruto" => $bruto,
            "jht" => $jht,
            "potongan" => $jht,
            "netto" => $netto
        ];
    }

}
