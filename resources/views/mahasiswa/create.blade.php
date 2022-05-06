<h1>Create mahasiswa</h1>

<form action="/mahasiswa/store" method="POST">
    @csrf
    <input type="text" name="no_mahasiswa" required placeholder="No Mahasiswa"></br>
    <input type="text" name="nama" required placeholder="Nama" ></br>
    <select name="jenis_kelamin" required>
        <option value="">Jenis Kelamin</option>
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
    </select></br>
    <textarea type="text" name="alamat" required placeholder="Alamat" rows="10"></textarea></br>
    <input type="submit" name="submit" value="Save">
</form>