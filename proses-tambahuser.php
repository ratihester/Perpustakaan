<?php

session_start();

// Include our login information
require_once('inc/koneksi.php');

if(isset($_POST['tambah'])){

//ambil data dari form
  // $id_user           = $_POST['id_user'];
  $name             = $_POST['nama'];
  $user             = $_POST['username'];
  $pass             = md5($_POST['password']);
  // $pass = md5($password);
  $mail             = $_POST['email'];


//query
$sql = "INSERT INTO tbl_user(nama, username, password, email) VALUES ('$name', '$user', '$pass', '$mail')";
$result = mysqli_query($connection,$sql);

if($result) {
  echo "<script>alert(Tambah data berhasil);</script>";
  echo "<meta http-equiv='refresh' content='1 url=user_data.php'>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        // die ("Could not query the database: <br />". mysqli_error($connection));
        echo "<script>alert(Akses dilarang);</script>";
        // 'Location: index.php?status=gagal';
    }
}

?>