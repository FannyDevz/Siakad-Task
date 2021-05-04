@extends('layouts.admin.admin')

@section('title')
    Tambah Data Jadwal Mata Pelajaran
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Guru</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-body">
            <form action="/jadwalmapel/store" method="POST">
              @csrf
                <label for="guru_id">Guru</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="guru_id"><i class="fas fa-user"></i></span>
                  </div>
                  <select class="custom-select" name="guru_id" required>
                    <option>-- Pilih Guru --</option>
                    @foreach ($guru as $guru)
                        <option value="{{$guru->id}}">
                          {{$guru->nama}}
                        </option>
                    @endforeach
                  </select>
                </div>
                <label for="mapel_id">Mapel</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="mapel_id"><i class="fas fa-book-reader"></i></span>
                  </div>
                  <select class="custom-select" name="mapel_id" required>
                    <option>-- Pilih Mapel --</option>
                    @foreach ($mapel as $mapel)
                        <option value="{{$mapel->id}}">
                          {{$mapel->nama_mapel}}
                        </option>
                    @endforeach
                  </select>
                </div>
                <label for="ruang_id">Ruang</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="ruangs_id"><i class="fas fa-school"></i></span>
                  </div>
                  <select class="custom-select" name="ruang_id">
                    <option>-- Pilih Ruang --</option>
                    @foreach ($ruangs as $ruangs)
                        <option value="{{$ruangs->id}}">
                          {{$ruangs->nama_ruang}}
                        </option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                    <label for="tahun">Tahun Ajaran</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="tahun"><i class="fas fa-user-graduate"></i></label>
                      </div>
                      <select class="custom-select" name="tahun">
                        <option>-- Pilih --</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label class="input-group-text" for="jurusan"><i class="fas fa-user-graduate"></i></label>
                        </div>
                    <select class="custom-select" name="jurusan">
                        <option>-- Pilih --</option>
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
                    </div>
                  </div>
                  <label for="hari">Hari</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="hari"><i class="fas fa-cloud-sun"></i></span>
                    </div>
                    <select class="custom-select" name="hari" required>
                      <option value="Senin">Senin</option>
                      <option value="Selasa">Selasa</option>
                      <option value="Rabu">Rabu</option>
                      <option value="Kamis">Kamis</option>
                      <option value="Jumat">Jumat</option>
                      <option value="Sabtu">Sabtu</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="jam_mulai">Jam Mulai</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="jam_mulai"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="time" class="form-control @error('jam_mulai') is-invalid @enderror" placeholder="Jam Mulai" name="jam_mulai" value="{{old('jam_mulai')}}">
                      @error('jam_mulai')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="jam_selesai">Jam Selesai</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="jam_selesai"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="time" class="form-control @error('jam_selesai') is-invalid @enderror" placeholder="Jam Mulai" name="jam_selesai" value="{{old('jam_selesai')}}">
                      @error('jam_selesai')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                      @enderror
                    </div>
                </div>
              <button type="submit" class="btn btn-success btn-sm">Simpan</button>
              <button type="reset" class="btn btn-warning btn-sm">Reset</button>
              <a href="/jadwalmapel" class="btn btn-secondary btn-sm">Kembali</a>
            </form>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->
@endsection
