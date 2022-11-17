<?php 
// menghubungkan dengan koneksi
  require_once('inc/koneksi.php');
 
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>
 
<?php
// upload file xls
$target = basename($_FILES['fileanggota']['name']) ;
move_uploaded_file($_FILES['fileanggota']['tmp_name'], $target);
 
// beri permisi agar file xls dapat di baca
chmod($_FILES['fileanggota']['name'],0777);
 
// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['fileanggota']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);
 
// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){
 
	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$id_anggota     = $data->val($i, 1);
	$id_kelas   	= $data->val($i, 2);
	$No_Induk	 	= $data->val($i, 3);
	$Nama			= $data->val($i, 4);
	$tanggal_lahir	= $data->val($i, 5);
	$Alamat			= $data->val($i, 6);
	$jenis_kelamin	= $data->val($i, 7);
	$tahun_ajaran	= $data->val($i, 8);


 
	if($id_anggota != "" && $id_kelas != "" && $No_Induk != "" && $tanggal_lahir != "" && $Alamat != "" && $jenis_kelamin != "" && $tahun_ajaran != ""){
		// input data ke database (table data_pegawai)
		//echo "HAAAAAAAAAAAAAAAAAAAAAAA";
		mysqli_query($connection,"INSERT into tbl_anggota values('$id_anggota','$id_kelas','$No_Induk','$Nama', '$tanggal_lahir', '$Alamat', '$jenis_kelamin', '$tahun_ajaran')");
		$berhasil++;
	}
}
 
// hapus kembali file .xls yang di upload tadi
unlink($_FILES['fileanggota']['name']);
 
// alihkan halaman ke index.php
header("location:anggota_data.php?berhasil=$berhasil");
?>