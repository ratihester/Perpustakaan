<?php

session_start();

// Include our login information
require_once('inc/koneksi.php');


//ambil data dari form
  if(isset($_POST['edit'])){

  $id_user      = $_POST['id_user'];
  $nama         = $_POST['nama'];
  $username     = $_POST['username'];
  $password     = md5($_POST['password']);
  // $pass = md5($password);
  $email        = $_POST['email'];

//query
$sql = "UPDATE tbl_user SET nama='$nama', username='$username', password= '$password', email='$email' WHERE id_user='$id_user'";
$result = mysqli_query($connection,$sql);

if($result) {
  echo "<script>alert('Mengubah data berhasil');</script>";
 echo "<meta http-equiv='refresh' content='1 url=user_data.php'>";
    } else {
      echo "<script>alert('Gagal Mengubah Data')</script>";
      die ("Could not query the database: <br />". mysqli_error($connection));
        // 'Location: index.php?status=gagal';
    }
}

?>