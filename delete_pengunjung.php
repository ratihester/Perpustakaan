<?php

session_start();

// Include our login information
include_once('inc/koneksi.php');

$id = $_GET['id'];

$sql  = "DELETE FROM pengunjung WHERE id_pengunjung ='$id'";
$query = mysqli_query($connection, $sql);

if ($sql ) {
      echo "<script>alert('Berhasil Menghapus')</script>";
      echo "<meta http-equiv='refresh' content='1 url=../SMPnew/buku_tamu.php'>";
    } else {
      echo "<script>alert('Gagal Menghapus')</script>";
      die ("Could not query the database: <br />". mysqli_error($connection));
      echo "<meta http-equiv='refresh' content='1 url=../SMP/buku_tamu.php'>";
    }
?>



