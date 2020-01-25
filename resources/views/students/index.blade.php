@extends('templates.layout')

@section('title', 'Laravel Students')

@section('content')
<div class="container">
  <div class="row mt-3">
    <div class="col-sm-6">
      <h3>Students All</h3>

      <a href="/students/create" class="btn btn-primary">Tambah Data Mahasiswa</a>

      @if (session('message'))
      <div class="alert alert-success mt-3">
        {{ session('message') }}
      </div>
      @endif

      <ul class="list-group mt-3">
        @foreach ($students as $student)
        <li class="list-group-item">
          {{ $student->name }}

          <a href="/students/{{ $student->id }}" class="badge badge-info float-right">detail</a>
          <a href="/students/{{ $student->id }}/edit" class="badge badge-success mr-1 float-right">update</a>

          <form action="/students/{{$student->id }}" method="post">
            @method('delete')
            @csrf
            <button type="submit" class="badge badge-danger">delete</button>
          </form>
        </li>
        @endforeach
      </ul>

      <div class="container">
        <div class="row mt-3">
          {{ $students->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection