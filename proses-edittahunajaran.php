<?php

session_start();

// Include our login information
require_once('inc/koneksi.php');


//ambil data dari form
  if(isset($_POST['edit'])){

  $id           = $_POST['id'];
  $tahunajaran  = $_POST['tahunajaran'];

//query
$sql = "UPDATE tbl_tahun_ajaran SET tahunajaran='$tahunajaran' WHERE id='$id'";
$result = mysqli_query($connection,$sql);

if($result) {
  echo "<script>alert('Mengubah data berhasil');</script>";
 echo "<meta http-equiv='refresh' content='1 url=tahunajaran_data.php'>";
    } else {
      echo "<script>alert('Gagal Mengubah Data')</script>";
      die ("Could not query the database: <br />". mysqli_error($connection));
        // 'Location: index.php?status=gagal';
    }
}

?>