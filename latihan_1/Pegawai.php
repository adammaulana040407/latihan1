<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Pegawai</h3>
    <form action="proses_tambah_kelas.php" method="post">
        ID_pegawai :
        <input type="text" name="ID_pegawai" value="" class="form-control">
        NIK :
        <input type="text" name="NIK" value="" class="form-control">
        Nama :
        <input type="text" name="Nama" value="" class="form-control">
        Alamat :
        <input type="text" name="Alamat" value="" class="form-control">
        Jenis_kelamin :
        <select name="Jenis kelamin" class="form-control">
            <option></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        <br>
        Telepon :
        <input type="text" name="Telepon" value="" class="form-control">
        Jabatan :
        <input type="text" name="Jabatan" value="" class="form-control">
        <input type="submit" name="simpan" value="Pegawai" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>