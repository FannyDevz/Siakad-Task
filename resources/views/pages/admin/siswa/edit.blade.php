@extends('layouts.admin.admin')

@section('title')
    Edit Data Siswa
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Ubah Data Siswa {{$item->nama}}</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-body">
            <form action="/siswa/{{$item->id}}/update" method="POST" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              <div class="form-group">
                <label for="nisn">Nisn</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="nisn"><i class="far fa-id-card"></i></span>
                  </div>
                  <input type="text" class="form-control @error('nisn') is-invalid @enderror" placeholder="NISN" name="nisn" value="{{$item->nisn}}">
                  @error('nisn')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="nama"><i class="far fa-user"></i></span>
                  </div>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama" name="nama" value="{{$item->nama}}">
                  @error('nama')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="tpt_lahir">Tempat Lahir</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="tpt_lahir"><i class="fas fa-home"></i></span>
                  </div>
                  <input type="text" class="form-control @error('tpt_lahir') is-invalid @enderror" placeholder="Tempat Lahir" name="tpt_lahir" value="{{$item->tpt_lahir}}">
                  @error('tpt_lahir')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="tgl_lahir"><i class="far fa-calendar-alt"></i></span>
                  </div>
                  <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" placeholder="Tanggal Lahir" name="tgl_lahir" value="{{$item->tgl_lahir}}">
                  @error('tgl_lahir')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="jns_kelamin">Jenis Kelamin</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="jns_kelamin"><i class="fas fa-venus-mars"></i></label>
                  </div>
                  <select class="custom-select" name="jns_kelamin">
                    <option>-- Pilih --</option>
                    <option value="L" @if($item->jns_kelamin == 'L') selected @endif>Laki-Laki</option>
                    <option value="P" @if($item->jns_kelamin == 'P') selected @endif>Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="agama">Agama</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="agama"><i class="fas fa-heart"></i></label>
                  </div>
                  <select class="custom-select" name="agama">
                    <option>-- Pilih --</option>
                    <option value="Islam" @if($item->agama == 'Islam') selected @endif>Islam</option>
                    <option value="Kristen" @if($item->agama == 'Kristen') selected @endif>Kristen</option>
                    <option value="Katolik" @if($item->agama == 'Katolik') selected @endif>Katolik</option>
                    <option value="Hindu" @if($item->agama == 'Hindu') selected @endif>Hindu</option>
                    <option value="Budha" @if($item->agama == 'Budha') selected @endif>Budha</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="alamat"><i class="fas fa-map-marker-alt"></i></i></span>
                  </div>
                  <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="3">{{$item->alamat}}</textarea>
                  @error('alamat')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="nama_ortu">Nama Orang Tua</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="nama_ortu"><i class="far fa-user"></i></span>
                  </div>
                  <input type="text" class="form-control @error('nama_ortu') is-invalid @enderror" placeholder="Nama Orang Tua" name="nama_ortu" value="{{$item->nama_ortu}}">
                  @error('nama_ortu')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="tahun">Tahun Ajaran</label>
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
              <div class="form-group">
                <label for="asal_sklh">Asal Sekolah</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="asal_sklh"><i class="fas fa-school"></i></span>
                  </div>
                  <input type="text" class="form-control @error('asal_sklh') is-invalid @enderror" placeholder="Asal Sekolah" name="asal_sklh" value="{{$item->asal_sklh}}">
                  @error('asal_sklh')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="image">Foto</label>
                <input type="file" class="form-control-file" name="image">
                <p class="text-danger">Masukan Foto Bila Perlu</p>
              </div>
              <button type="submit" class="btn btn-success btn-sm">Simpan</button>
              <a href="/siswa" class="btn btn-secondary btn-sm">Kembali</a>
            </form>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->
@endsection
