<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        
        <button type="submit" class="btn btn-outline-primary">Tampilkan Data</button>
        <a href="#" class="btn btn-outline-primary" style = "position:relative; left:10px;">Cetak</a>
        <br><br>
          <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>NPWP</th>
            <th>Jenis kelamin</th>
            <th>Jabatan</th>
            <th>Gaji pokok</th>
            <th>Status</th>
            <th>Tanggungan</th>
            <th>Lembur</th>
            <th>SPJ</th>
            <th>Jaminan</th>
            <th>Potongan</th>
            <th>Total gaji</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php
            $n = 1;
          @endphp
          @foreach ($karyawan as $data)
          @php
              $gaji= App\Libraries\GajiCalculator::CalculateGaji($data, $bulan, $tahun);
          @endphp
          <tr>
            <td>{{ $n++ }}</td>
            <td>{{ $data->nik }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->npwp }}</td>
            <td>{{ $data->jenis_kelamin }}</td>
            <td>{{ $data->jabatan }}</td>
            <td>{{ $data->gaji_pokok }}</td>
            <td>{{ $data->status_pernikahan }}</td>
            <td>{{ $data->tanggungan }}</td>
            <td>{{ $gaji['lembur']}}</td>
            <td>{{ $gaji['spj']}}</td>
            <td>{{ $gaji['jaminan'] }}</td>
            <td>{{ $gaji['potongan'] }}</td>
            <td>{{ $gaji['netto'] }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>