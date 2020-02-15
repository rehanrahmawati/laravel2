@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Daftar Siswa</div>

                <div class="card-body">
                  <div class="form-group">
                  <label>Nis</label>
                  <input type="text" name="nis" class="form-control" value="{{$siswa->nis}}" required>
                  </div>
                  <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" value="{{$siswa->nama}}" required>
                  </div>
                  <div class="form-group">
                  <label>Alamat</label>
                  <textarea name="alamat" class="form-control" readonly>{{ $siswa->alamat }}</textarea>
                  </div>
                  <div class="form-group">
                  <label>Kelas</label>
                  <input type="text" value="{{$siswa->kelas->kelas}}" name="kelas" class="form-control" required>
                  </div>
                  <div class="form-group">
                  <a href="{{url()->previous()}}" type="submit" class="btn btn-primary">Kembali</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

