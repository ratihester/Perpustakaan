<?php

session_start();

// Include our login information
require_once('inc/koneksi.php');

if(isset($_POST['tambah'])){

//ambil data dari form
  // $id_user           = $_POST['id_user'];
  $kelas           = $_POST['kelas'];
  $No_Induk        = $_POST['noinduk'];
  $Nama            = $_POST['nama'];
  $tgl_lahir       = $_POST['tanggallahir'];
  $Alamat          = $_POST['alamat'];
  $jenis_kelamin   = $_POST['jenis_kelamin'];
  $tahun_ajaran    = $_POST['tahun_ajaran'];


//query
$sql = "INSERT INTO tbl_anggota(id_kelas, No_Induk, Nama, tanggal_lahir, Alamat, Jenis_kelamin, tahun_ajaran) VALUES ('$kelas', '$No_Induk', '$Nama', '$tgl_lahir', '$Alamat', '$jenis_kelamin', '$tahun_ajaran')";
$result = mysqli_query($connection,$sql);

if($result) {
  echo "<script>alert(Tambah data berhasil);</script>";
  echo "<meta http-equiv='refresh' content='1 url=anggota_data.php?'>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        // die ("Could not query the database: <br />". mysqli_error($connection));
        echo "<script>alert(Akses dilarang);</script>";
        // 'Location: index.php?status=gagal';
    }
}

?>