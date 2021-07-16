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
    <h2 align="center">Laporan Data Absen </h2>
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
            @forelse ($absenPertanggal as $p)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$p->user->name}}</td>
                    <td>{{$p->tanggal}}</td>
                    <td>{{$p->time_in}}</td>
                    <td>{{$p->time_out}}</td>
                    <td>{{$p->note}}</td>
                    <td>{{$p->keterangan}}</td>
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
