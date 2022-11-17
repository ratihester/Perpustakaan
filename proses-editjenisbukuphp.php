<?php

session_start();

// Include our login information
require_once('inc/koneksi.php');


//ambil data dari form
  if(isset($_POST['edit'])){

  $id           	  = $_POST['id'];
  $nama_jenis_buku    = $_POST['tbl_jenis_buku'];

//query
$sql = "UPDATE tbl_jenisbuku SET nama_jenis_buku ='$nama_jenis_buku' WHERE id='$id'";
$result = mysqli_query($connection,$sql);

if($result) {
  echo "<script>alert('Mengubah data berhasil');</script>";
 echo "<meta http-equiv='refresh' content='1 url=jenisbuku_data.php'>";
    } else {
      echo "<script>alert('Gagal Mengubah Data')</script>";
      die ("Could not query the database: <br />". mysqli_error($connection));
        // 'Location: index.php?status=gagal';
    }
}

?>