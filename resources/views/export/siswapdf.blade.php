<!doctype html>
<html lang="en">
<head>
    <style>
        table {
        width:100%;
        }
        table, th, td {
        border: 1px solid ;
        border-collapse: collapse;
        }
        th, td {
        padding: 10px;
        text-align: left;
        }
        #t01 tr:nth-child(even) {
        background-color: #eee;
        font-size: 9pt;
        }
        #t01 tr:nth-child(odd) {
        background-color: #fff;
        font-size: 9pt;
        }
        #t01 th {
        background-color: white;
        color: black;
        }
    </style>
</head>
<body>
    <h2 align="center">Laporan Data Siswa SMK Bhakti Mulia Pare</h2>
    <br>
    <table id="t01">
        <thead>
            <tr>
                <th>NISN</th>
                <th>Nama</th>
                <th>Tempat, Tgl Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Tahun Ajaran</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($siswa as $s)
                <tr>
                    <td>{{$s->nisn}}</td>
                    <td>{{$s->nama}}</td>
                    <td>{{$s->tpt_lahir}}, {{$s->tgl_lahir}}</td>
                    <td>{{$s->jns_kelamin}}</td>
                    <td>{{$s->agama}}</td>
                    <td>{{$s->alamat}}</td>
                    <td>{{$s->tahun}}</td>
                    <td>{{$s->jurusan}}</td>
                </tr>
            @empty
                <tr>
                    <td align="center">
                        Data Kosong
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang</h1>
    <table class="table" style="border: 1px solid #ddd">
        <thead>
            <tr>
                <th>NISN</th>
                <th>Nama</th>
                <th>Tempat, Tgl Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Nama Ortu</th>
                <th>Tahun Ajaran</th>
                <th>Asal Sekolah</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($siswa as $s)
                <tr>
                    <td>{{$s->nisn}}</td>
                    <td>{{$s->nama}}</td>
                    <td>{{$s->tpt_lahir}}, {{$s->tgl_lahir}}</td>
                    <td>{{$s->jns_kelamin}}</td>
                    <td>{{$s->agama}}</td>
                    <td>{{$s->alamat}}</td>
                    <td>{{$s->nama_ortu}}</td>
                    <td>{{$s->tahun}}</td>
                    <td>{{$s->asal_sklh}}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">
                        Data Kosong
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html> --}}
