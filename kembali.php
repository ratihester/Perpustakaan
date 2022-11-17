<?php 
require_once('inc/koneksi.php');
if (isset($_POST["id_kembali"])){
	$id_kembali = $_POST['id_kembali'];

	$sql = "UPDATE `tbl_peminjaman` SET `status`=2 WHERE `idpeminjaman`=$id_kembali ";
	$result = mysqli_query($connection,$sql);

	if($result) {
	  echo "<script>alert('Buku berhasil dikembalikan')</script>";
	  echo "<meta http-equiv='refresh' content='1 url=data_peminjaman.php'>";
	    } else {
	        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
	        // die ("Could not query the database: <br />". mysqli_error($connection));
	        echo "<script>alert(Akses dilarang);</script>";
	        echo "<meta http-equiv='refresh' content='1 url=data_peminjaman.php'>";
	        // 'Location: index.php?status=gagal';
	    }
}

if (isset($_POST["id_panjang"])){
	$id_panjang = $_POST['id_panjang'];
	$tgl_kembali = date('Y-m-d', strtotime($_POST['tgl_kembali'] . " +7 day"));
	$sql = "UPDATE `tbl_peminjaman` SET `tgl_kembali` = '$tgl_kembali', `status` = '3' WHERE `tbl_peminjaman`.`idpeminjaman` = $id_panjang;";
	$result = mysqli_query($connection,$sql);

	if($result) {
	  echo "<script>alert('Buku berhasil diperpanjang')</script>";
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