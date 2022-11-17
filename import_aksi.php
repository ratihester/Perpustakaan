<?php 
// menghubungkan dengan koneksi
include 'inc/koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>
 
<?php
// upload file xls
$target = basename($_FILES['filebuku']['name']) ;
move_uploaded_file($_FILES['filebuku']['tmp_name'], $target);
 
// beri permisi agar file xls dapat di baca
chmod($_FILES['filebuku']['name'],0777);
 
// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filebuku']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);
 
// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){
 
	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$idbuku         = $data->val($i, 1);
	$jenis_buku     = $data->val($i, 2);
	$kode_buku   	= $data->val($i, 3);
	$judul_buku 	= $data->val($i, 4);
	$pengarang		= $data->val($i, 5);
	$penerbit		= $data->val($i, 6);
	$thn_terbit		= $data->val($i, 7);
	$jumlah_buku	= $data->val($i, 8);
	$kurikulum		= $data->val($i, 9);
	$asalbuku		= $data->val($i, 10);
	$tanggal_masuk  = $data->val($i, 11);

 
	if( $idbuku != "" && $jenis_buku != "" && $kode_buku != "" && $judul_buku != "" && $pengarang != "" && $penerbit != "" && $thn_terbit != "" && $jumlah_buku != "" && $kurikulum != "" && $asalbuku != "" && $tanggal_masuk != ""){
		// input data ke database (table data_pegawai)
		mysqli_query($koneksi,"INSERT into tbl_buku values('idbuku','$jenis_buku','$kode_buku','$judul_buku', '&pengarang', '$penerbit', '$thn_terbit', '$jumlah_buku', '$kurikulum', '$asalbuku', '$tanggal_masuk')");
		$berhasil++;
	}
}
 
// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filebuku']['name']);
 
// alihkan halaman ke index.php
header("location:index.php?berhasil=$berhasil");
?>