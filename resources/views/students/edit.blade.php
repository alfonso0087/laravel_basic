@extends ('templates.Layout')

@section('title','Ubah Data')


@section('content')
<div class="container">
  <div class="row mt-5">
    <div class="col-sm-6">
      <h4>Halaman Ubah data Mahasiswa</h4>

      <div class="card">
        <div class="card-header">
          Form Ubah data
        </div>
        <div class="card-body">
          <form action="/students/{{ $student->id}}" method="POST">
            @csrf
            @method('patch')
            <div class="form-group">
              <label for="nama">Nama Mahasiswa</label>
              <input type="text" name="name" id="nama" value="{{$student->name}}" class=" form-control @error('name') is-invalid @enderror" ">
              @error('name')<div class=" invalid-feedback">{{ $message}}</div> @enderror
        </div>
        <div class="form-group">
          <label for="nim">NIM Mahasiswa</label>
          <input type="text" name="nim" id="nim" value="{{$student->nim}}" class=" form-control">
        </div>
        <div class="form-group">
          <label for="email">Email Mahasiswa</label>
          <input type="text" name="email" id="email" value="{{$student->email}}" class=" form-control">
        </div>
        <div class="form-group">
          <label for="jurusan">Jurusan Mahasiswa</label>
          <input type="text" name="jurusan" id="jurusan" value="{{$student->jurusan}}" class=" form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>

  </div>
</div>
</div>
@endsection