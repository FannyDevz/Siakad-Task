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
    <h2 align="center">Hasil Nilai Siswa {{$siswa->nama}}</h2>
<br>
    <table id="t01">
        <thead>
            <tr>
                <th>Mapel</th>
                <th>Nilai UH1</th>
                <th>Nilai UH2</th>
                <th>Nilai uts</th>
                <th>Nilai uas</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            {{-- {{dd($matapelajarans)}} --}}
            @forelse ($siswa->mapel as $mapel)
                <tr>
                    <td>{{$mapel->nama_mapel}}</td>
                    <td>{{$mapel->pivot->nilai_uh1}}</td>
                    <td>{{$mapel->pivot->nilai_uh2}}</td>
                    <td>{{$mapel->pivot->uts}}</td>
                    <td>{{$mapel->pivot->uas}}</td>
                    <td>{{$mapel->pivot->status}}</td>
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
