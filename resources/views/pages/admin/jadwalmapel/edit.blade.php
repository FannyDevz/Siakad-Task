@extends('layouts.admin.admin')

@section('title')
    Edit Data Jadwal Mata Pelajaran
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Ubah Jadwal</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-body">
            <form action="/jadwalmapel/{{$item->id}}/update" method="POST">
                @method('PUT')
                @csrf
                <label for="guru_id">Guru</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="gurus_id"><i class="fas fa-user"></i></span>
                  </div>
                  <select name="guru_id" required class="custom-select">
                    <option value="{{$item->guru_id}}">-- Ubah Bila Perlu --</option>
                    @foreach ($gurus as $gurus)
                        <option value="{{$gurus->id}}">
                            {{$gurus->nama}}
                        </option>
                    @endforeach
                  </select>
                </div>
                <label for="mapel_id">Mapel</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="mapels_id"><i class="fas fa-book-reader"></i></span>
                  </div>
                  <select class="custom-select" name="mapel_id">
                    <option value="{{$item->mapel_id}}">-- Ubah Bila Perlu --</option>
                    @foreach ($mapels as $mapels)
                        <option value="{{$mapels->id}}">
                          {{$mapels->nama_mapel}}
                        </option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="tahun">Angkatan</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="tahun"><i class="fas fa-user-graduate"></i></label>
                    </div>
                    <select class="custom-select" name="tahun">
                      <option>-- Pilih --</option>
                        <option value="2017" @if($item->tahun == '2017') selected @endif>2017</option>
                        <option value="2018" @if($item->tahun == '2018') selected @endif>2018</option>
                        <option value="2019" @if($item->tahun == '2019') selected @endif>2019</option>
                        <option value="2020" @if($item->tahun == '2020') selected @endif>2020</option>
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
                    <option value="AP 1" @if($item->jurusan == 'AP 1') selected @endif>AP 1</option>
                    <option value="AP 2" @if($item->jurusan == 'AP 2') selected @endif>AP 2</option>
                    <option value="JB 1" @if($item->jurusan == 'JB 1') selected @endif>JB 1</option>
                    <option value="JB 2" @if($item->jurusan == 'JB 2') selected @endif>JB 2</option>
                    <option value="MM 1" @if($item->jurusan == 'MM 1') selected @endif>MM 1</option>
                    <option value="MM 2" @if($item->jurusan == 'MM 2') selected @endif>MM 2</option>
                    <option value="MM 3" @if($item->jurusan == 'MM 3') selected @endif>MM 3</option>
                    <option value="TGB 1" @if($item->jurusan == 'TGB 1') selected @endif>TGB 1</option>
                    <option value="TGB 2" @if($item->jurusan == 'TGB 2') selected @endif>TGB 2</option>
                    <option value="TKJ 1" @if($item->jurusan == 'TKJ 1') selected @endif>TKJ 1</option>
                    <option value="TKJ 2" @if($item->jurusan == 'TKJ 2') selected @endif>TKJ 2</option>
                    <option value="TKJ 3" @if($item->jurusan == 'TKJ 3') selected @endif>TKJ 3</option>
                    <option value="TKR 1" @if($item->jurusan == 'TKR 1') selected @endif>TKR 1</option>
                    <option value="TKR 2" @if($item->jurusan == 'TKR 2') selected @endif>TKR 2</option>
                    <option value="TPM 1" @if($item->jurusan == 'TPM 1') selected @endif>TPM 1</option>
                  </select>
                </div>
              </div>
                <label for="ruang_id">Ruang</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="ruangs_id"><i class="fas fa-school"></i></span>
                  </div>
                  <select class="custom-select" name="ruang_id">
                    <option value="{{$item->ruang_id}}">-- Ubah Bila Perlu --</option>
                    @foreach ($ruangs as $ruangs)
                        <option value="{{$ruangs->id}}">
                          {{$ruangs->nama_ruang}}
                        </option>
                    @endforeach
                  </select>
                </div>
                <label for="hari">Hari</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="hari"><i class="fas fa-cloud-sun"></i></span>
                  </div>
                  <select class="custom-select" name="hari">
                    <option value="Senin" @if($item->hari == 'Senin') selected @endif>Senin</option>
                    <option value="Selasa" @if($item->hari == 'Selasa') selected @endif>Selasa</option>
                    <option value="Rabu" @if($item->hari == 'Rabu') selected @endif>Rabu</option>
                    <option value="Kamis" @if($item->hari == 'Kamis') selected @endif>Kamis</option>
                    <option value="Jumat" @if($item->hari == 'Jumat') selected @endif>Jumat</option>
                    <option value="Sabtu" @if($item->hari == 'Sabtu') selected @endif>Sabtu</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="jam_mulai">Jam Mulai</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="jam_mulai"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="time" class="form-control @error('jam_mulai') is-invalid @enderror" placeholder="Jam Mulai" name="jam_mulai" value="{{$item->jam_mulai}}">
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
                    <input type="time" class="form-control @error('jam_selesai') is-invalid @enderror" placeholder="Jam Selesai" name="jam_selesai" value="{{$item->jam_selesai}}">
                    @error('jam_selesai')
                      <div class="invalid-feedback">
                          {{$message}}
                      </div>
                    @enderror
                  </div>
                </div>
                <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                <a href="/jadwalmapel" class="btn btn-secondary btn-sm">Kembali</a>
            </form>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->
@endsection
