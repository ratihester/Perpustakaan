<!DOCTYPE html>
<html lang="en"> 

<?php
  // Include our login information
  require_once('inc/koneksi.php');
  
?>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Perpustakaan SMP Kartika III-2</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
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
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
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
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
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
     <section id="main-content">
      <section class="wrapper">
        <h3>Tambah Data Tamu</h3>
        <!-- BASIC FORM VALIDATION -->
        <!-- /row -->
        <!-- FORM VALIDATION -->
      
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="proses-tambahpengunjung.php">
                  <div class="form-group ">
                    <label for="nama" class="control-label col-lg-2">Nama</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="nama" name="nama" type="text" placeholder=" Nama Lengkap" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="jenis_kelamin" class="control-label col-lg-2">Jenis Kelamin</label>
                    <div class="col-lg-10">
                      <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                      <option value="" disabled selected>--Pilih Jenis Kelamin--</option>
                      <option value="Laki - laki">Laki- Laki</option>
                      <option value="Perempuan">Perempuan</option>  
                    </select>

                    </div>
                  </div>

                 <div class="form-group ">
                    <label for="nama" class="control-label col-lg-2">Kelas</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="kelas" name="kelas" type="text" placeholder="" />
                    </div>
                  </div>
                 <div class="form-group ">
                    <label for="nama" class="control-label col-lg-2">Keperluan</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="keperluan" name="keperluan" type="text" placeholder=" Keperluan" required />
                    </div>
                  </div> 

                  <div class="form-group ">
                    <label for="cari" class="control-label col-lg-2">Cari</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="cari" name="cari" type="text"  >
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10" style="display: -webkit-box;">
                      
                      <button class="btn btn-theme" type="submit" name="tambah">Simpan</button>&nbsp;
                      </form>

                      <form action="anggota_data.php" method="GET">
                      <button class="btn btn-success" type="submit" >Kembali</button>
                      </form>
                    </div>
                  </div>
                
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
           &copy;  <strong>Perpustakaan SMP Kartika III-2 Semarang</strong>.
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->

        </div>
        <a href="form_validation.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/form-validation-script.js"></script>

</body>

</html>
