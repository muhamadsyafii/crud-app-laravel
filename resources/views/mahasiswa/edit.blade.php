@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Mahasiswa') }}</div>

                <div class="card-body">
                    <div class="container">
                        <h1>
                            <center>Edit mahasiswa</center>
                        </h1>
                        <form action="/mahasiswa/{{$mahasiswa->id}}" method="POST">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="noMahasiswa" class="form-label">No Mahasiswa</label>
                                <input type="text" name="no_mahasiswa" class="form-control" id="exampleFormControlInput1" value="{{$mahasiswa->no_mahasiswa}}">
                            </div>
                            <div class="mb-3">
                                <label for="namaMahasiswa" class="form-label">Nama Mahasiswa</label>
                                <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" value="{{$mahasiswa->nama}}">
                            </div>
                            <div class="mb-3">
                                <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" name="jenis_kelamin" required>
                                    <option value="">Jenis Kelamin</option>
                                    <option value="L" @if($mahasiswa->jenis_kelamin == "L") selected @endif >Laki-Laki</option>
                                    <option value="P" @if($mahasiswa->jenis_kelamin == "P") selected @endif >Perempuan</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3">{{$mahasiswa->alamat}}</textarea>
                            </div>

                            <!-- <input type="text" name="no_mahasiswa" required placeholder="No Mahasiswa" value="{{$mahasiswa->no_mahasiswa}}"></br> -->
                            <!-- <input type="text" name="nama" required placeholder="Nama" value="{{$mahasiswa->nama}}"></br> -->
                            <!-- <textarea type="text" name="alamat" required placeholder="Alamat" rows="10">{{$mahasiswa->alamat}}</textarea></br> -->
                            <input class="btn btn-primary" type="submit" name="submit" value="Save" style="float: right;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection