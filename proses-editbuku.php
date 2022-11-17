<?php

session_start();

// Include our login information
require_once('inc/koneksi.php');


//ambil data dari form
  if(isset($_POST['edit'])){

    $idbuku       = $_POST['idbuku'];
    $jenis_buku   = $_POST['jenis_buku'];
    $kode_buku    = $_POST['kode_buku'];
    $judul_buku   = $_POST['judul_buku'];
    $pengarang    = $_POST['pengarang'];
    $penerbit     = $_POST['penerbit'];
    $thn_terbit   = $_POST['thn_terbit'];
    $jumlah_buku  = $_POST['jumlah_buku'];
    $kurikulum    = $_POST['kurikulum'];


//query
$sql = "UPDATE tbl_buku SET jenis_buku='$jenis_buku', kode_buku='$kode_buku', judul_buku= '$judul_buku', pengarang= '$pengarang', penerbit= '$penerbit', thn_terbit= '$thn_terbit', jumlah_buku= '$jumlah_buku', kurikulum= '$kurikulum' WHERE idbuku='$idbuku'";
$result = mysqli_query($connection,$sql);

if($result) {
  echo "<script>alert('Mengubah data berhasil');</script>";
 echo "<meta http-equiv='refresh' content='1 url=buku_data.php'>";
    } else {
      echo "<script>alert('Gagal Mengubah Data')</script>";
      die ("Could not query the database: <br />". mysqli_error($connection));
        // 'Location: index.php?status=gagal';
    }
}

?>