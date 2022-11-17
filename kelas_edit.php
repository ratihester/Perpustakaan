<!DOCTYPE html>
<html lang="en">

<?php
  // Include our login information
  include "inc/koneksi.php";
  
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
    <<aside>
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
              <li><a href="">Peminjaman Harian</a></li>
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
              <li><a href="buku_data.php">Laporan Buku</a></li>
              <li><a href="anggota_data.php">Laporan Anggota</a></li>
              <li><a href="user_data.php">Laporan Admin</a></li>
              <li><a href="kelas_data.php">Laporan Kelas</a></li>
              <li><a href="kelas_data.php">Laporan Transaksi</a></li>
            </ul>
          </li>

          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside><aside>
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
              <li><a href="anggota_data.php">Data Anggota</a></li>
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
    $id_kelas = $_GET['id_kelas'];
     // buat query untuk ambil data dari database
    
    $query = mysqli_query($connection, "SELECT * FROM tbl_kelas WHERE id_kelas=".$id_kelas."");
    $data = mysqli_fetch_array($query);

    $kd_kelas      = $data['kd_kelas'];
    $nama_kelas    = $data['nama_kelas'];

    ?>
 

    <section id="main-content">
      <section class="wrapper">
        <h3>Edit Kategori Kelas</h3>
        <!-- BASIC FORM VALIDATION -->
        <!-- /row -->
        <!-- FORM VALIDATION -->
      
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="edit" method="POST" action="proses-editkelas.php">
                  <div class="form-group ">
                    <input type="hidden" name="id_kelas" value="<?php echo $id_kelas; ?>">
                    <label for="kd_kelas" class="control-label col-lg-2">KD Kelas</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="kd_kelas" name="kd_kelas" type="text" placeholder="KD Kelas" value="<?php echo $kd_kelas; ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="nama_kelas" class="control-label col-lg-2">Nama Kelas</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="nama_kelas" name="nama_kelas" type="text" placeholder=" Nama Kelas" value="<?php echo $nama_kelas; ?>" required />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" name="edit">Simpan</button>
                      <a href="kelas_data.php" class="btn btn-success">Batal</a>
                    </div>
                  </div>
                </form>
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

























