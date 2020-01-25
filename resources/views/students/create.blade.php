@extends ('templates.Layout')

@section('title','Tambah Data')


@section('content')
<div class="container">
  <div class="row mt-5">
    <div class="col-sm-6">
      <h4>Halaman Tambah data Mahasiswa</h4>

      <div class="card">
        <div class="card-header">
          Form Tambah data
        </div>
        <div class="card-body">
          <form action="/students" method="POST">
            @csrf
            <div class="form-group">
              <label for="nama">Nama Mahasiswa</label>
              <input type="text" name="name" id="nama" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror">
              @error('name')<div class="invalid-feedback">{{ $message}}</div> @enderror
            </div>
            <div class="form-group">
              <label for="nim">NIM Mahasiswa</label>
              <input type="text" name="nim" id="nim" value="{{ old('nim') }}" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email Mahasiswa</label>
              <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control">
            </div>
            <div class="form-group">
              <label for="jurusan">Jurusan Mahasiswa</label>
              <input type="text" name="jurusan" id="jurusan" value="{{ old('jurusan') }}" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection