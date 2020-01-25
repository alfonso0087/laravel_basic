@extends ('templates.Layout')

@section('title','Detail Mahasiswa')


@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6">

      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$student->name}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$student->nim}}</h6>
          <h6 class="card-subtitle mb-2 text-muted">{{$student->jurusan}}</h6>
          <h6 class="card-subtitle mb-2 text-muted">{{$student->email}}</h6>
        </div>
      </div>


    </div>
  </div>
</div>

@endsection