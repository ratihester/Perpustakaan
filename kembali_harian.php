<?php 
require_once('inc/koneksi.php');
if (isset($_POST["id_kembali"])){
	$id_kembali = $_POST['id_kembali'];

	$sql = "UPDATE `tbl_peminjaman_harian` SET `status`=2 WHERE `id_peminjaman`='$id_kembali'";
	$result = mysqli_query($connection,$sql);

	if($result) {
	  echo "<script>alert('Buku berhasil dikembalikan')</script>";
	  echo "<meta http-equiv='refresh' content='1 url=data_peminjaman_harian.php'>";
	    } else {
	        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
	        // die ("Could not query the database: <br />". mysqli_error($connection));
	        echo "<script>alert(Akses dilarang);</script>";
	        echo "<meta http-equiv='refresh' content='1 url=data_peminjaman_harian.php'>";
	        // 'Location: index.php?status=gagal';
	    }
}


?>