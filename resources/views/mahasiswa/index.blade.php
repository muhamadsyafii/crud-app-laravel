<h1>Tabel Mahasiswa</h1>
<table border="1">
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
            <a href="/mahasiswa/{{$mhs->id}}/edit">Edit</a>
            <form action="/mahasiswa/{{$mhs->id}}" method="POST">
                @method('delete')
                @csrf
                <input type="submit" value="Delete">
            </form>
            </td>
    </tr>
    @endforeach
</table>
</br>
<a href="mahasiswa/create">Add Mahasiswa</a>
