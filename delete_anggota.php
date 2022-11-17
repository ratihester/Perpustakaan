<?php

session_start();

// Include our login information
include_once('inc/koneksi.php');

$id_anggota = $_GET['id_anggota'];
$sql = "DELETE FROM tbl_anggota WHERE id_anggota ='".$id_anggota."'";
$query = mysqli_query($connection, $sql);

if ($sql ) {
      echo "<script>alert('Berhasil Menghapus')</script>";
      echo "<meta http-equiv='refresh' content='1 url=../SMPnew/anggota_data.php'>";
    } else {
      echo "<script>alert('Gagal Menghapus')</script>";
      die ("Could not query the database: <br />". mysqli_error($connection));
      echo "<meta http-equiv='refresh' content='1 url=../SMPnew/anggota_data.php'>";
    }
?>



