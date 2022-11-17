<?php

session_start();

// Include our login information
require_once('inc/koneksi.php');

if(isset($_POST['tambah'])){

//ambil data dari form
  // $id_user           = $_POST['id_user'];
  $tbl_jenis_buku             = $_POST['tbl_jenis_buku'];


//query
$sql = "INSERT INTO tbl_jenisbuku(nama_jenis_buku) VALUES ('$tbl_jenis_buku')";
$result = mysqli_query($connection,$sql);

if($result) {
  echo "<script>alert(Tambah data berhasil);</script>";
  echo "<meta http-equiv='refresh' content='1 url=jenisbuku_data.php'>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        // die ("Could not query the database: <br />". mysqli_error($connection));
        echo "<script>alert(Akses dilarang);</script>";
        // 'Location: index.php?status=gagal';
    }
}

?>