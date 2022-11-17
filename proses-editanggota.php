<?php

session_start();

// Include our login information
require_once('inc/koneksi.php');

if(isset($_POST['edit'])){

//ambil data dari form
    $id_anggota      = $_POST['id_anggota'];
    $id_kelas        = $_POST['id_kelas'];
    $No_Induk        = $_POST['No_Induk'];
    $nama            = $_POST['nama'];
    $tanggal_lahir   = $_POST['tanggal_lahir'];
    $alamat          = $_POST['Alamat'];
    $Jenis_kelamin   = $_POST['Jenis_kelamin'];
    $tahun_ajaran     = $_POST['tahun_ajaran'];

//query
$sql = "UPDATE tbl_anggota SET No_Induk='$No_Induk', nama='$nama', tanggal_lahir='$tanggal_lahir', Alamat='$alamat', Jenis_kelamin='$Jenis_kelamin', id_kelas= '$id_kelas', tahun_ajaran= '$tahun_ajaran' WHERE id_anggota='$id_anggota'";
$result = mysqli_query($connection,$sql);

if($result) {
  echo "<script>alert('Mengubah data berhasil');</script>";
 echo "<meta http-equiv='refresh' content='1 url=anggota_data.php'>";
    } else {
      echo "<script>alert('Gagal Mengubah Data')</script>";
      die ("Could not query the database: <br />". mysqli_error($connection));
        // 'Location: index.php?status=gagal';
    }
}

?>