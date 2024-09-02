<?php
if($_POST){
    $ID=$_POST['ID'];
    $Jabatan=$_POST['Jabatan'];
    $Gaji_pokok=$_POST['Gaji_pokok'];
    $Tunjangan=$_POST['Tunjangan'];
    if(empty($ID)){
        echo "<script>alert('ID tidak boleh kosong');location.href='Pegawai.php';</script>";

    } elseif(empty($Jabatan)){
        echo "<script>alert('Jabatan tidak boleh kosong');location.href='Jabatan.php';</script>";
    } elseif(empty($Gaji_pokok)){
        echo "<script>alert('Gaji_pokok tidak boleh kosong');location.href='Jabatan.php';</script>";
    } elseif(empty($Tunjangan)){
        echo "<script>alert('Tunjangan tidak boleh kosong');location.href='Jabatan.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into Jabatan (ID, Jabatan, Gaji_pokok, Tunjangan) value ('".$ID."','".$Jabatan."','".$Gaji_pokok."','".$Tunjangan."','".$username."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan Jabatan');location.href='Jabatan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Jabatan');location.href='Jabatan.php';</script>";
        }
    }
}
?>
