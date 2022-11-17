<?php

session_start();

// Include our login information
require_once('inc/koneksi.php');

if(isset($_POST['tambah'])){

//ambil data dari form
  // $id_user           = $_POST['id_user'];
  date_default_timezone_set("Asia/Jakarta");
  $nama               = $_POST['nama'];
  $jenis_kelamin      = $_POST['jenis_kelamin'];
  $kelas              = $_POST['kelas'];
  $keperluan          = $_POST['keperluan'];
  $cari               = $_POST['cari'];
  $tanggal_kunjung    = date("Y-m-d");
  $jam_kunjung        = date("H:i:s");

//query
$sql = "INSERT INTO pengunjung (nama, jenis_kelamin, kelas, keperluan, cari, tanggal_kunjung, jam_kunjung) VALUES ('$nama', '$jenis_kelamin', '$kelas', '$keperluan', '$cari', '$tanggal_kunjung', '$jam_kunjung')";
$result = mysqli_query($connection,$sql);

if($result) {
  echo "<script>alert(Tambah data berhasil);</script>";
  echo "<meta http-equiv='refresh' content='1 url=buku_tamu.php'>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        // die ("Could not query the database: <br />". mysqli_error($connection));
        echo "<script>alert(Akses dilarang);</script>";
        // 'Location: index.php?status=gagal';
    }
}

?>