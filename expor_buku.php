<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title>Export Buku</title>
</head>

<style type="text/css">
.wrapper{
    width:1250px;
    margin:0.2 auto;
    size: landscape;
}
@page{
    size: landscape;
}

.wrapperDUDI{
    width:800px;
    margin:0.5 auto;
    size: portrait;
}

table {
  font-family:Tahoma, Geneva, sans-serif;
  font-size:10pt;
  border-width: 1px;
  border-style: solid;
  border-color: #000;
  border-collapse: collapse;
  margin: 10px 0px;
  width:100%;
}
.table1 thead{border-bottom:3px double #000000;}
 th{
  text-align: center;
  padding: 0.5em;
  border-width: 1px;
  border-style: solid;
  border-color: #000;
  border-collapse: collapse;
}
 td{
  vertical-align: top;
  border-width: 1px;
  border-style: solid;
  border-color: #000;
  border-collapse: collapse;
  padding:0.5em;
}
td .tgl{
  text-align: center;
  vertical-align: top;
  border-width: 1px;
  border-style: solid;
  border-color: #000;
  border-collapse: collapse;
  padding:0.5em;
}
hr{border-bottom: 5px double #000;}
h2,h1,h3{ padding:0;margin:0;
  font-family: Arial, sans-serif; 
}
.logo{float:left;width:100px}
.cop{float:left;width:820px;text-align:center;}
.clean{clear:both}
</style>

<body>
<?php
//require_once '../background/server.php'; 
    include "inc/koneksi.php";

    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Buku.xls");
    $query = "SELECT * FROM tbl_buku ORDER BY `kode_buku` ASC";
    $execute = mysqli_query($connection,$query);
?> 
    <h1>DATA BUKU<br>SMP KARTIKA 32</h1>
    
    <table border="1">
        <tr>
          <th>No</th>
          <th>Kode Buku</th>
          <th>Judul Buku</th>
          <th>Pengarang</th>
          <th>Penerbit</th>
          <th>Tahun Terbit</th>
          <th>Jumlah Buku</th>
          <th>Kurikulum</th>
      </tr>
             
<?php
        $no=1;
        while ($data = mysqli_fetch_array($execute)) {
              $kode_buku    = $data['kode_buku'];
              $judul_buku   = $data['judul_buku'];
              $pengarang    = $data['pengarang'];
              $penerbit     = $data['penerbit'];
              $thn_terbit   = $data['thn_terbit'];
              $jumlah_buku  = $data['jumlah_buku'];
              $kurikulum    = $data['kurikulum'];
        ?>

        <tr>
            <td>
                <?php echo $no; ?>
            </td>
            <td>
                <?php echo $kode_buku; ?>
            </td>
            <td>
                <?php echo $judul_buku; ?>
            </td>
            <td>
                <?php echo $pengarang; ?>
            </td>
            <td>
                <?php echo $penerbit; ?>
            </td>
            <td>
                <?php echo $thn_terbit; ?>
            </td>
            <td>
                <?php echo $jumlah_buku; ?>
            </td>
            <td>
                <?php echo $kurikulum; ?>
            </td>
        </tr>
    <?php
        $no++;
    }
    ?>

    </table>

</body>
</html>
