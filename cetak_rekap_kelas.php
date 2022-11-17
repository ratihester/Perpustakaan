<?php

?>
<style type="text/css">
.wrapper{
    width:1000px;
    margin:0.2 auto;
}
@page{
    /*size: landscape;*/
}

.wrapperDUDI{
    width:800px;
    margin:0.5 auto;
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
th span 
{
  -ms-writing-mode: tb-rl;
  -webkit-writing-mode: vertical-rl;
  writing-mode: vertical-rl;
  transform: rotate(180deg);
  white-space: nowrap;
}

</style>

<script type="text/javascript">
    function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("print");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        printButton.style.visibility = 'visible';
    }
</script>

<?php
require_once 'inc/koneksi.php'; 

    ?>

    <button id="print" onclick="printpage();">Print</button>
    <div class='wrapper'>
        <h2>Data Kelas</h2>
        <h2>PERPUSTAKAAN SMP KARTIKA III-2</h2>
        <div class='clean'></div>
        <hr>

        <table id="example1" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Kelas</th>
                    <th>Nama Kelas</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $nomor=1;

            // mencari nama_siswa
            $sql = "SELECT * FROM `tbl_kelas`";
            $result = mysqli_query($connection,$sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $kd_kelas   = $row["kd_kelas"];
                $nama_kelas = $row["nama_kelas"];
            ?>
            
                <tr>
                    <td><?php echo $nomor;?></td>   
                    <td><?php echo $kd_kelas;?></td>
                    <td><?php echo $nama_kelas;?></td>
                </tr>
            <?php 
                $nomor++;

                }
            ?>
                
                <?php
            ?>
            </tbody>
        </table>
    </div>
    <br>
    <br>

    