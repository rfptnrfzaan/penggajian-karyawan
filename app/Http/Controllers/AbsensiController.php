<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;
use App\Models\Karyawan;
use Illuminate\Support\Carbon;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('absensi.absensi');
    }

    public function lihat(Request $request)
    {
        $date = Carbon::parse($request->bulan);

        $karyawan = Karyawan::all();
        $bulan = $date->format('m');
        $tahun = $date->format('Y');

        return view('absensi.lihat', compact('karyawan', 'bulan', 'tahun', 'date'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah(Request $request)
    {
        $date = Carbon::parse($request->bulan);
        $bulan = $date->format('m');
        $tahun = $date->format('Y');

        $karyawan = Karyawan::all();
        return view('absensi.table', compact('karyawan', 'date', 'bulan', 'tahun'));
    }

    public function ambil(Request $request){
        $date = $request->date;

        $karyawans = Karyawan::all();
        $dataAbsen = [];
        $n = 1;

        foreach ($karyawans as $karyawan) {
            $absen = $karyawan->getAbsen($date);
            $temp = [
                'no' => $n++,
                'id' => $karyawan->id,
                'nik' => $karyawan->nik,
                'nama' => $karyawan->nama,
                'masuk' => $absen->masuk ?? '--',
                'keterangan' => $absen->keterangan ?? '-',
                'lembur' => $absen->lembur ?? '--',
                'gaji_lembur' => $absen->gaji_lembur ?? 0,
                'spj' => $absen->spj ?? 0,
            ];
            array_push($dataAbsen, $temp);
        }

        $data = [
            'date' => $date,
            'absensi' => $dataAbsen
        ];

        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tanggal = $request->tanggal;
        foreach ($request->form as $id => $value) {
            Absensi::updateOrCreate(
                ['tanggal' => $tanggal, 'id_karyawan' => $id],
                [
                    'masuk' => $value['masuk'],
                    'lembur' => $value['lembur'],
                    'gaji_lembur' => $value['gaji_lembur'],
                    'spj' => $value['spj'],
                    'keterangan' => $value['keterangan']
                ]
            );
        }

        return redirect('absensi');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Absensi $absensi)
    {
        return view('absensi/edit', compact('absensi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absensi $absensi)
    {
        $absensi->fill($request->all());
        $absensi->save();
        return redirect('absensi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
