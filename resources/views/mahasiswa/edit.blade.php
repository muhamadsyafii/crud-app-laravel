<h1>Edit mahasiswa</h1>

<form action="/mahasiswa/{{$mahasiswa->id}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="no_mahasiswa" required placeholder="No Mahasiswa" value="{{$mahasiswa->no_mahasiswa}}"></br>
    <input type="text" name="nama" required placeholder="Nama" value="{{$mahasiswa->nama}}"></br>
    <select name="jenis_kelamin" required>
        <option value="">Jenis Kelamin</option>
        <option value="L" @if($mahasiswa->jenis_kelamin == "L") selected @endif >Laki-Laki</option>
        <option value="P" @if($mahasiswa->jenis_kelamin == "P") selected  @endif >Perempuan</option>
    </select></br>
    <textarea type="text" name="alamat" required placeholder="Alamat" rows="10" >{{$mahasiswa->alamat}}</textarea></br>
    <input type="submit" name="submit" value="Save">
</form>