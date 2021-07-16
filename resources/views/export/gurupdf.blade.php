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
    <h2 align="center">Laporan Data Guru SMK Bhakti Mulia Pare</h2>
<br>
    <table id="t01">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($guru as $g)
                <tr>
                    <td>{{$g->nip}}</td>
                    <td>{{$g->nama}}</td>
                    <td>{{$g->tpt_lahir}}</td>
                    <td>{{$g->tgl_lahir}}</td>
                    <td>{{$g->jns_kelamin}}</td>
                    <td>{{$g->agama}}</td>
                    <td>{{$g->alamat}}</td>
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


{{-- <table class="table" style="border: 1px solid #ddd">
    <thead>
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($guru as $g)
            <tr>
                <td>{{$g->nip}}</td>
                <td>{{$g->nama}}</td>
                <td>{{$g->tpt_lahir}}</td>
                <td>{{$g->tgl_lahir}}</td>
                <td>{{$g->jns_kelamin}}</td>
                <td>{{$g->agama}}</td>
                <td>{{$g->alamat}}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center">
                    Data Kosong
                </td>
            </tr>
        @endforelse
    </tbody>
</table> --}}
