<?php

session_start();

// Include our login information
require_once('inc/koneksi.php');

if(isset($_POST['add'])){

//ambil data dari form
  // $id_user           = $_POST['id_user'];
  $tbl_jenis_buku       = $_POST['tbl_jenis_buku'];
  $judul_buku           = $_POST['judul_buku'];
  $thn_ajaran           = $_POST['thn_ajaran'];
  $nama_kelas           = $_POST['nama_kelas'];
  $nama_peminjam        = $_POST['nama_peminjam'];

  $tgl_pinjam         = DateTime::createFromFormat('d-m-Y', $_POST['tgl_pinjam'])->format('Y-m-d');
  $tgl_kembali        = DateTime::createFromFormat('d-m-Y', $_POST['tgl_kembali'])->format('Y-m-d');
  $status             = "1";


//query
$sql = "INSERT INTO tbl_peminjaman (tgl_pinjam, tgl_kembali, id_anggota, idbuku, status) VALUES ('$tgl_pinjam', '$tgl_kembali','$nama_peminjam','$judul_buku','$status')";
$result = mysqli_query($connection,$sql);


if($result) {
  echo "<script>alert('Tambah data berhasil')</script>";
  echo "<meta http-equiv='refresh' content='1 url=data_peminjaman.php'>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        // die ("Could not query the database: <br />". mysqli_error($connection));
        echo "<script>alert(Akses dilarang);</script>";
        echo "<meta http-equiv='refresh' content='1 url=data_peminjaman.php'>";
        // 'Location: index.php?status=gagal';
    }
}

?>