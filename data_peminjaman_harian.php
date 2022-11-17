<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
   <title>Perpustakaan SMP Kartika III-2 </title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="lib/advanced-datatable/css/DT_bootstrap.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!--header start-->
   <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b>PERPUSTAKAAN SMP KARTIKA III - 2</b></a>
      <!--logo end-->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
   
    <!--sidebar start-->
   <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><img src="img/logo.jpg" class="img-circle" width="80"></a></p>
          <li class="mt">
            <a class="" href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
         
           <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Peminjaman</span>
              </a>
             <ul class="sub">
              <li><a href="data_peminjaman_harian.php">Peminjaman Harian</a></li>
              <li><a href="data_peminjaman.php">Peminjaman Mingguan</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a class="" href="buku_tamu.php">
              <i class="fa fa-book"></i>
              <span>Buku Tamu</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Data Master</span>
              </a>
            <ul class="sub">
              <li><a href="buku_data.php">Data Buku</a></li>
               <li><a href="jenisbuku_data.php">Data Jenis Buku</a></li>
               <li><a href="anggota_data.php">Data Anggota</a></li>
               <li><a href="tahunajaran_data.php">Data Tahun Ajaran</a></li>
              <li><a href="user_data.php">Data Admin</a></li>
              <li><a href="kelas_data.php">Data Kelas</a></li>
            </ul>
            <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Laporan</span>
              </a>
            <ul class="sub">
              <li><a href="print_buku.php">Laporan Buku</a></li>
              <li><a href="print_anggota.php">Laporan Anggota</a></li>
              <li><a href="print_user.php">Laporan Admin</a></li>
              <li><a href="print_kelas.php">Laporan Kelas</a></li>
              <li><a href="print_peminjamanh.php">Laporan Transaksi Harian</a></li>
              <li><a href="print_peminjamanm.php">Laporan Transaksi Mingguan</a></li>
            </ul>
          </li>

          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
  <?php
      include "inc/koneksi.php";
      $sql = "SELECT * FROM `tbl_peminjaman_harian` JOIN `tbl_anggota` ON `tbl_peminjaman_harian`.`id_anggota` = `tbl_anggota`.`id_anggota` JOIN `tbl_buku` ON `tbl_buku`.`idbuku` = `tbl_peminjaman_harian`.`idbuku` JOIN `tbl_kelas` ON `tbl_anggota`.`id_kelas` = `tbl_kelas`.`id_kelas` WHERE  `tbl_peminjaman_harian`.`status`=1 ";
      $result = mysqli_query($connection,$sql);
    ?>

     <section id="main-content">
      <section class="wrapper">
        <h3>Data Peminjaman Harian</h3>
        <div class="row mb">
          <div>
         <a href="tahun_ajaran_peminjamanh.php" class="btn btn-theme"><i class="fa fa-plus"></i> Data Peminjam</a> &nbsp;
          </div>
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="1" cellspacing="1" border="1" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Nama Peminjam</th>
                    <th>Kelas</th>
                    <th>Jumlah Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  $no=1;
                  while ($row = mysqli_fetch_array($result)){
                    ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['judul_buku']; ?></td>
                    <td><?php echo $row['Nama']; ?></td>
                    <td><?php echo $row['nama_kelas']; ?></td>
                    <td><?php echo $row['jumlahbuku']; ?></td>
                    <td><?php echo $row['tgl_pinjam']; ?></td>
                    <td>
                    <form action="kembali_harian.php" method="post">
                      <input type="hidden" name="id_kembali" value="<?php echo $row['id_peminjaman']; ?>">
                      <input type="submit" value="Kembali">
                    </form>

          </td>

                 </tr>
                <?php
                $no++;
                }
                ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script type="text/javascript">
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Kelas:</td><td> ' + aData[4] + '</td></tr>';
      sOut += '<tr><td>Nama:</td><td>' + aData[3] + '</td></tr>';
      sOut += '<tr><td>Judul Buku:</td><td>' + aData[2]+ '</td></tr>';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
         // this.src = "lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>
</body>

</html>