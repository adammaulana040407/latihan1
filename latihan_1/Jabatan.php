<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah Siswa</h3>
    <form action="proses_tambah_siswa.php" method="post">
        ID :
        <input type="text" name="id" value="" class="form-control">
        Jabatan :
        <input type="date" name="jabatan" value="" class="form-control">
        Gaji_pokok :
        <select name="gaji_pokok" class="form-control">
        </select>
        Tunjangan :
        <textarea name="tunjangan" class="form-control" rows="4"></textarea>
        Kelas :
        <select name="id_kelas" class="form-control">
            <option></option>
            <?php
            include "koneksi.php";
            $qry_pegawai=mysqli_query($conn,"select * from pegawai");
            while($data_pegawai=mysqli_fetch_array($qry_kelas)){
                echo '<option value="'.$data_pegawai['id'].'">'.$data_pegawai['nama_pegawai'].'</option>';    
            }
            ?>
        </select>
        ID_pegawai :
        <input type="text" name="ID_pegawai" value="" class="form-control">
        NIK :
        <input type="text" name="NIK" value="" class="form-control">
        Nama :
        <input type="text" name="Nama" value="" class="form-control">
        Alamat :
        <input type="text" name="Alamat" value="" class="form-control">
        Kelamin :
        <input type="text" name="Kelamin" value="" class="form-control">
        Telepon :
        <input type="text" name="Telepon" value="" class="form-control">
        Jabatan :
        <input type="text" name="Jabatan" value="" class="form-control">
        <input type="submit" name="simpan" value="Tambah Siswa" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
