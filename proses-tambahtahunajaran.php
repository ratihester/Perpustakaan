<?php

session_start();

// Include our login information
require_once('inc/koneksi.php');

if(isset($_POST['tambah'])){

//ambil data dari form
  // $id_user           = $_POST['id_user'];
  $tahunajaran             = $_POST['tahunajaran'];


//query
$sql = "INSERT INTO tbl_tahun_ajaran(tahunajaran) VALUES ('$tahunajaran')";
$result = mysqli_query($connection,$sql);

if($result) {
  echo "<script>alert(Tambah data berhasil);</script>";
  echo "<meta http-equiv='refresh' content='1 url=tahunajaran_data.php'>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        // die ("Could not query the database: <br />". mysqli_error($connection));
        echo "<script>alert(Akses dilarang);</script>";
        // 'Location: index.php?status=gagal';
    }
}

?>