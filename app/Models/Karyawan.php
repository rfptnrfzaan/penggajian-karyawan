<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $guarded = [];

    public function absensi()
    {
        return $this->hasMany(Absensi::class, 'id_karyawan');
    }

    public function jumlahHadir($tahun, $bulan) {
        return $this->absensi()
                    ->where('masuk','=','Masuk')
                    ->whereYear('tanggal','=',$tahun)
                    ->whereMonth('tanggal','=',$bulan)
                    ->count();
    }

    public function jumlahLembur($tahun, $bulan) {
        return $this->absensi()
                    ->where('lembur','<>','Tidak Lembur')
                    ->whereYear('tanggal','=',$tahun)
                    ->whereMonth('tanggal','=',$bulan)
                    ->count();
    }

    public function jumlahSPJ($tahun, $bulan) {
        return $this->absensi()
                    ->whereYear('tanggal','=',$tahun)
                    ->whereMonth('tanggal','=',$bulan)
                    ->sum('spj') + 0;
    }

    public function jumlahGajiLembur($tahun, $bulan) {
        return $this->absensi()
                    ->whereYear('tanggal','=',$tahun)
                    ->whereMonth('tanggal','=',$bulan)
                    ->sum('gaji_lembur') + 0;
    }
}
