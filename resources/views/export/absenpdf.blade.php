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
        padding: 15px;
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
    <h2 align="center">Laporan Data Absen Guru</h2>
<br>
    <table id="t01">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Jam Masuk</th>
                <th>Jam Keluar</th>
                <th>Catatan</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($absen as $a)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$a->user->name}}</td>
                    <td>{{$a->tanggal}}</td>
                    <td>{{$a->time_in}}</td>
                    <td>{{$a->time_out}}</td>
                    <td>{{$a->note}}</td>
                    <td>{{$a->keterangan}}</td>
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
