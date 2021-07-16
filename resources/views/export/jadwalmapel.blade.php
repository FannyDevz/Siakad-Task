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
    <h2 align="center">Laporan Data Mata Pelajaran SMK Bhakti Mulia Pare</h2>
<br>
    <table id="t01">
        <thead>
            <tr>
                <th>Nama Mapel</th>
                <th>Nama Guru</th>
                <th>Angkatan</th>
                <th>Jurusan</th>
                <th>Ruang</th>
                <th>Hari</th>
                <th>Jam Mulai</th>
                <th>Jam Selesai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jadwal as $j)
                <tr>
                    <td>
                        @if ($j->mapel == null)
                            Mapel Terhapus
                        @else
                            {{$j->mapel->nama_mapel}}
                        @endif
                    </td>
                    <td>
                        @if ($j->guru == null)
                            Guru Terhapus
                        @else
                            {{$j->guru->nama}}
                        @endif
                    </td>
                    <td>{{$j->tahun}}</td>

                    <td>{{$j->jurusan}}</td>
                    <td>
                        @if ($j->ruang == null)
                            Ruang Terhapus
                        @else
                            {{$j->ruang->nama_ruang}}
                        @endif
                    </td>

                    <td>{{$j->hari}}</td>
                    <td>{{$j->jam_mulai}}</td>
                    <td>{{$j->jam_selesai}}</td>
                </tr>
            @endforeach
    </table>
</body>
</html>
