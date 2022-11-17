<?php

session_start();

// Include our login information
require_once('inc/koneksi.php');

if(isset($_POST['add'])) {

//ambil data dari form
  $jenisbuku    = $_POST['jenis_buku'];
  $kodebuku     = $_POST['kode_buku'];
  $judul_buku   = $_POST['judul_buku'];
  $penga        = $_POST['pengarang'];
  $terbit       = $_POST['penerbit'];
  $tahunterbit  = $_POST['thn_terbit'];
  $jlhbuku      = $_POST['jumlah_buku'];
  $kurik        = $_POST['kurikulum'];


  //query
  $sql = "INSERT INTO tbl_buku (jenis_buku, kode_buku, judul_buku, pengarang, penerbit, thn_terbit, jumlah_buku,kurikulum) VALUES ('$jenisbuku', '$kodebuku', '$judul_buku', '$penga', '$terbit', '$tahunterbit', '$jlhbuku', '$kurik')";
  $result = mysqli_query($connection,$sql);

  if($result) {
    echo "<script>alert(Tambah data berhasil);</script>";
    echo "<script>location='buku_data.php';</script>";
    // echo "<meta http-equiv='refresh' content='1 url=tampil_buku.php'>";
  } else {
    // kalau gagal alihkan ke halaman indek.php dengan status=gagal
    // die ("Could not query the database: <br />". mysqli_error($connection));
    echo "<script>alert('Gagal menambah  buku!');</script>";
    echo "<script>location='tampil_buku.php';</script>";
    // 'Location: index.php?status=gagal';
  }
}

?>