<?php

session_start();

// Include our login information
require_once('inc/koneksi.php');


//ambil data dari form
  if(isset($_POST['edit'])){

  date_default_timezone_set("Asia/Jakarta");
  $id_pengunjung      = $_POST['id_pengunjung'];
  $nama               = $_POST['nama'];
  $jenis_kelamin      = $_POST['jenis_kelamin'];
  $kelas              = $_POST['kelas'];
  $keperluan          = $_POST['keperluan'];
  $cari               = $_POST['cari'];
  $tanggal_kunjung    = date("Y-m-d");
  $jam_kunjung        = date("H:i:s");


//query
$sql = "UPDATE pengunjung SET nama='$nama', jenis_kelamin='$jenis_kelamin', kelas='$kelas', keperluan='$keperluan', cari='$cari', tanggal_kunjung='$tanggal_kunjung', jam_kunjung='$jam_kunjung'   WHERE id_pengunjung='$id_pengunjung'";
$result = mysqli_query($connection,$sql);

if($result) {
  echo "<script>alert('Mengubah data berhasil');</script>";
 echo "<meta http-equiv='refresh' content='1 url=buku_tamu.php'>";
    } else {
      echo "<script>alert('Gagal Mengubah Data')</script>";
      die ("Could not query the database: <br />". mysqli_error($connection));
        // 'Location: index.php?status=gagal';
    }
}

?>