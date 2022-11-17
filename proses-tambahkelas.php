<?php

session_start();

// Include our login information
require_once('inc/koneksi.php');

if(isset($_POST['tambah'])){

//ambil data dari form

  $kd_kelas       = $_POST['kd_kelas'];
  $nama_kelas     = $_POST['nama_kelas'];
  
//query
$sql = "INSERT INTO tbl_kelas(kd_kelas, nama_kelas) VALUES ('$kd_kelas', '$nama_kelas')";
$result = mysqli_query($connection,$sql);

if($result) {
  echo "<script>alert(Tambah data berhasil);</script>";
  echo "<meta http-equiv='refresh' content='1 url=kelas_data.php'>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        // die ("Could not query the database: <br />". mysqli_error($connection));
        echo "<script>alert(Akses dilarang);</script>";
        // 'Location: index.php?status=gagal';
    }
}

?>