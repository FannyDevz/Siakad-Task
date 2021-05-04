@extends('layouts.admin.admin')

@section('title')
    Nilai
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 mt-4 mb-4">Pilih Tahun Ajaran</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-body">
            <label for="">Tahun Ajaran</label>
            <select class="form-control mb-3" id="tahun">
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
            </select>
            <label for="">Jurusan</label>
            <select class="form-control mb-3" id="jurusan">
                <option value="AP 1">AP 1</option>
                <option value="AP 2">AP 2</option>
                <option value="JB 1">JB 1</option>
                <option value="JB 2">JB 2</option>
                <option value="MM 1">MM 1</option>
                <option value="MM 2">MM 2</option>
                <option value="MM 3">MM 3</option>
                <option value="TGB 1">TGB 1</option>
                <option value="TGB 2">TGB 2</option>
                <option value="TKJ 1">TKJ 1</option>
                <option value="TKJ 2">TKJ 2</option>
                <option value="TKJ 3">TKJ 3</option>
                <option value="TKR 1">TKR 1</option>
                <option value="TKR 2">TKR 2</option>
                <option value="TPM 1">TPM 1</option>
            </select>
            <a href="" onclick="this.href='/guru/nilaiProses/'+ document.getElementById('tahun').value +'/'+document.getElementById('jurusan').value" class="btn btn-primary"><i class="fas fa-spinner mr-2"></i>Proses Nilai</a>

            <!-- <a href="{{ url('guru/nilaiProses//')}}" class="btn btn-primary"><i class="fas fa-spinner mr-2"></i>Proses Nilai</a> -->
          </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
@push('prepend-style')
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endpush

@push('addon-script')
      <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
      <script>
        $(document).ready(function() {
          $('#dataTable').DataTable();
        } );
      </script>
      <script>
        $('.delete').click(function(){
          var $gurunama = $(this).attr('guru-nama');
          var $guruid = $(this).attr('guru-id');
          swal({
            title: "Apakah Kamu Yakin",
            text: "Data Guru "+$gurunama+" Akan Terhapus",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
              console.log(willDelete);
            if (willDelete) {
              window.location = "guru/"+$guruid+"/destroy";
            } else {
              swal("Data Guru "+$gurunama+" Tidak Terhapus");
            }
          });
        })
      </script>
      <script>
        @if (Session::has('status'))
          toastr.success("{{Session::get('status')}}", "Trimakasih")
        @endif
      </script>
@endpush
