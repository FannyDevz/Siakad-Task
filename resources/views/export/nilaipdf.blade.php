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
    {{-- {{dd($sekolah)}} --}}
    <h4 align="center">Hasil Nilai Siswa</h4>
    <h4 align="center">Tahun Akademik 2020/2021</h4>
    <h4 align="center">SMK Bhakti Mulia Pare</h4>
    <hr>
    <h6 align="left">NISN    : {{auth()->user()->username}}</h6>
    <h6 align="left">NAMA     : {{auth()->user()->name}}</h6>
    <br>
    <table id="t01">
        <thead class="thead-dark">
            <tr>
                <th>Mapel</th>
                <th>Nilai uh1</th>
                <th>Nilai uh2</th>
                <th>Nilai uts</th>
                <th>Nilai uas</th>
            </tr>
        </thead>
        <tbody>
            {{-- {{dd($siswa)}} --}}
            @forelse (auth()->user()->siswa->mapel as $mapel)
                <tr>
                    <td>{{$mapel->nama_mapel}}</td>
                    <td>{{$mapel->pivot->nilai_uh1}}</td>
                    <td>{{$mapel->pivot->nilai_uh2}}</td>
                    <td>{{$mapel->pivot->uts}}</td>
                    <td>{{$mapel->pivot->uas}}</td>
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
