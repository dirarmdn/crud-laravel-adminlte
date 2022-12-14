@extends('layout.admin')

@section('content')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid container">
      <div class="mb-2">
          <h1 class="m-0 text-center">Edit Data Pegawai</h1>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
    <div class="container mt-5 w-50 mx-auto d-block px-5">
        <form action="/updatedata/{{ $data->replid }}" method="POST">
          @csrf
          <label for="floatingInput">NIP</label>
            <div class="form-group form-floating mb-3">
              <input type="number" class="form-control" id="floatingInput" placeholder="1234567" name="nip" value="{{ $data->nip }}">
            </div>
            <label for="floatingInput">Nama Pegawai</label>
            <div class="form-group form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" placeholder="Your Name" name="nama" value="{{ $data->nama }}">
            </div>
            <label for="floatingInput">Tempat Lahir</label>
            <div class="form-group form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" placeholder="Birth PLace" name="tmplahir" value="{{ $data->tmplahir }}">
            </div>
            <label for="floatingInput">Tanggal Lahir</label>
            <div class="form-group form-floating mb-3">
              <input type="date" class="form-control" id="floatingInput" placeholder="18-02-93" name="tgllahir" value="{{ $data->tgllahir }}">
            </div>
            <label for="floatingInput">Kota</label>
            <div class="form-group form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" placeholder="ex:Bandung" name="kota" value="{{ $data->kota }}">
            </div>
          <button type="submit" class="btn btn-primary mb-5">Submit</button>
        </form>
    </div>
@endsection