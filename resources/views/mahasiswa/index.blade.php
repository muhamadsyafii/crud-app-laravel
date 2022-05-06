@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mahasiswa') }}</div>

                <div class="card-body">
                    <div class="container">
                        <h1>
                            <center>Tabel Mahasiswa</center>
                        </h1>
                        <a class="btn btn-primary" href="mahasiswa/create" style="float: right;">Add Mahasiswa</a></br></br>
                        <table class="table table-striped">
                            <tr>
                                <th>ID</th>
                                <th>No Mahasiswa</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach($mahasiswa as $mhs)
                            <tr>
                                <td>{{$mhs->id}}</td>
                                <td>{{$mhs->no_mahasiswa}}</td>
                                <td>{{$mhs->nama}}</td>
                                <td>{{$mhs->jenis_kelamin}}</td>
                                <td>{{$mhs->alamat}}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-success" href="/mahasiswa/{{$mhs->id}}/edit">Edit</a>
                                        <form action="/mahasiswa/{{$mhs->id}}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger" type="submit" value="Delete">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        </br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection