<?php

session_start();

// Include our login information
require_once('inc/koneksi.php');


//ambil data dari form
  if(isset($_POST['edit'])){

  $id_kelas      = $_POST['id_kelas'];
  $kd_kelas      = $_POST['kd_kelas'];
  $nama_kelas    = $_POST['nama_kelas'];

//query
$sql = "UPDATE tbl_kelas SET kd_kelas='$kd_kelas', nama_kelas='$nama_kelas' WHERE id_kelas='$id_kelas'";
$result = mysqli_query($connection,$sql);

if($result) {
  echo "<script>alert('Mengubah data berhasil');</script>";
 echo "<meta http-equiv='refresh' content='1 url=kelas_data.php'>";
    } else {
      echo "<script>alert('Gagal Mengubah Data')</script>";
      die ("Could not query the database: <br />". mysqli_error($connection));
        // 'Location: index.php?status=gagal';
    }
}

?>