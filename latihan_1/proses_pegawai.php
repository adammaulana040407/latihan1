<?php
if($_POST){
    $ID = $_POST['ID'];
    $NIK = $_POST['NIK'];
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $Kelamin = $_POST['Kelamin'];
    $Telepon = $_POST['Telepon'];
    $Jabatan = $_POST['Jabatan'];

    if(empty($ID)){
        echo "<script>alert('ID tidak boleh kosong');location.href='tambah_kelas.php';</script>";
    } elseif(empty($NIK)){
        echo "<script>alert('NIK tidak boleh kosong');location.href='tambah_kelas.php';</script>";
    } elseif(empty($Nama)){
        echo "<script>alert('Nama tidak boleh kosong');location.href='tambah_kelas.php';</script>";
    } elseif(empty($Alamat)){
        echo "<script>alert('Alamat tidak boleh kosong');location.href='tambah_kelas.php';</script>";
    } elseif(empty($Kelamin)){
        echo "<script>alert('Kelamin tidak boleh kosong');location.href='tambah_kelas.php';</script>";
    } elseif(empty($Telepon)){
        echo "<script>alert('Telepon tidak boleh kosong');location.href='tambah_kelas.php';</script>";
    } elseif(empty($Jabatan)){
        echo "<script>alert('Jabatan tidak boleh kosong');location.href='tambah_kelas.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "INSERT INTO kelas (ID, NIK, Nama, Alamat, Kelamin, Telepon, Jabatan) VALUES ('".$ID."', '".$NIK."', '".$Nama."', '".$Alamat."', '".$Kelamin."', '".$Telepon."', '".$Jabatan."')");
        
        if($insert){
            echo "<script>alert('Sukses menambahkan Pegawai');location.href='Pegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Pegawai');location.href='Pegawai.php';</script>";
        }
    }
}
?>