@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
          <div class="container">
            <h1>
              <center>Create mahasiswa</center>
            </h1>
            <form action="/mahasiswa/store" method="POST">
              @csrf
              <div class="mb-3">
                <label for="noMahasiswa" class="form-label">No Mahasiswa</label>
                <input type="text" name="no_mahasiswa" class="form-control" placeholder="No Mahasiswa">
              </div>
              <div class="mb-3">
                <label for="noMahasiswa" class="form-label">Nama Mahasiswa</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Mahasiswa">
              </div>
              <!-- <input type="text" name="no_mahasiswa" required placeholder="No Mahasiswa"></br> -->
              <!-- <input type="text" name="nama" required placeholder="Nama"></br> -->
              <div class="mb-3">
                <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="jenis_kelamin" required>
                  <option value="">Jenis Kelamin</option>
                  <option value="L">Laki-Laki</option>
                  <option value="P">Perempuan</option>
                </select></br>
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" placeholder="Masukan Alamat Anda" rows="10"></textarea>
                <!-- <input type="text" name="nama" class="form-control" placeholder="Nama Mahasiswa"> -->
              </div>
              <!-- <textarea type="text" name="alamat" required placeholder="Alamat" rows="10"></textarea></br> -->
              <input class="btn btn-primary" type="submit" name="submit" value="Save" style="float: right;">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection