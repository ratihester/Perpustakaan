<?php

session_start();

// Include our login information
include_once('inc/koneksi.php');

$id = $_GET['id'];
$sql = "DELETE FROM tbl_user WHERE id_user ='$id'";
$query = mysqli_query($connection, $sql);

if ($sql ) {
      echo "<script>alert('Berhasil Menghapus')</script>";
      echo "<meta http-equiv='refresh' content='1 url=../SMPnew/user_data.php'>";
    } else {
      echo "<script>alert('Gagal Menghapus')</script>";
      die ("Could not query the database: <br />". mysqli_error($connection));
      echo "<meta http-equiv='refresh' content='1 url=../SMPnew/user_data.php'>";
    }
?>



