<?php

session_start();

// Include our login information
include_once('inc/koneksi.php');

$kdbuku = $_GET['kode_buku'];
$sql = "DELETE FROM tbl_buku WHERE kode_buku ='".$kdbuku."'";
$query = mysqli_query($connection, $sql);

if ($sql ) {
      echo "<script>alert('Berhasil Menghapus')</script>";
      echo "<meta http-equiv='refresh' content='1 url=../SMPnew/buku_data.php'>";
    } else {
      echo "<script>alert('Gagal Menghapus')</script>";
      die ("Could not query the database: <br />". mysqli_error($connection));
      echo "<meta http-equiv='refresh' content='1 url=../SMPnew/buku_data.php'>";
    }
?>



