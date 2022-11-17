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
    <?php
    $id_anggota = $_GET['id_anggota'];
   

    //mengambil dari database
    $query = mysqli_query($connection, "SELECT * FROM tbl_anggota WHERE id_anggota=".$id_anggota."");
    $data = mysqli_fetch_array($query);
    $id_anggota      = $data['id_anggota'];
    $No_Induk        = $data['No_Induk'];
    $Nama            = $data['Nama'];
    $tgl_lahir       = $data['tanggal_lahir'];
    $Alamat          = $data['Alamat'];
    $Jenis_kelamin   = $data['Jenis_kelamin'];

    $id_kelas        = $data['id_kelas'];
    $kelas           = $data['nama_kelas'];
    $tahunajaran     = $data['tahun_ajaran'];
    ?>




    <section id="main-content">
      <section class="wrapper">
        <h3>Edit Data Anggota</h3>
        <!-- BASIC FORM VALIDATION -->
        <!-- /row -->
        <!-- FORM VALIDATION -->
      
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="proses-editanggota.php">
                  <div class="form-group ">

                    <input type="hidden" name="id_anggota" value="<?php echo $id_anggota; ?>">
                    <label for="firstname" class="control-label col-lg-2">No Induk</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="No_Induk" name="No_Induk" type="text" placeholder="Nama Induk" value="<?php echo $No_Induk; ?>" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">Nama</label>
                    <div class="col-lg-10">
                      <input class="form-control" id="nama" name="nama" type="text" placeholder=" Nama Lengkap" value="<?php echo $Nama; ?>" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="password" class="control-label col-lg-2">Tanggal Lahir</label>
                    <div class="col-lg-10">
                      <input class="form-control" id="tanggal_lahir" name="tanggal_lahir" type="date" placeholder="hh/bb/tttt" value="<?php echo $tgl_lahir ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="email" class="control-label col-lg-2">Alamat</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="Alamat" name="Alamat" type="alamat" placeholder="Alamat" value="<?php echo $Alamat; ?>" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <input type="hidden" name="id_anggota" value="<?php echo $id_anggota; ?>">
                    <label for="Jenis_kelamin" class="control-label col-lg-2">Jenis Kelamin</label>
                    <div class="col-lg-10">
                      <select class="form-control"  name="Jenis_kelamin" required>
                        <option value="Laki- Laki" <?php if ($Jenis_kelamin=="Laki- Laki") echo 'selected="selected"';?>>Laki- Laki</option>
                        <option value="Perempuan" <?php if ($Jenis_kelamin=="Perempuan") echo 'selected="selected"';?>>Perempuan</option>  
                    </select>
                    </div>
                  </div>
                 
                  <div class="form-group ">
                    <label for="Kelas" class="control-label col-lg-2">Kelas</label>
                    <div class="col-lg-10">
                        <select class="form-control"  id="id_kelas" name="id_kelas" required>
                        <option value="" disabled selected>--Pilih Kelas--</option> 
                        <?php 

                         $sql = "SELECT * FROM tbl_kelas ";

                          $result = mysqli_query($connection,$sql);
                          while ($data = mysqli_fetch_array($result)){ ?>
                            <option value="<?php echo $data['id_kelas']; ?>" <?php if($data['id_kelas']==$id_kelas){echo "selected";} ?>><?php echo $data['nama_kelas'];?></option>
                            <?php
                          }

                        ?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label  for="kelas" class="control-label col-lg-2">Tahun  Ajaran</label>
                    <div class="col-lg-10">
                      <select class="form-control"  id="tahun_ajaran" name="tahun_ajaran" required>
                      <option value="" disabled selected>--Pilih Tahun Ajaran--</option>
                      <?php 
                      // $thn_aj = ($thn_ajrn."/".($thn_ajrn+1));
                      $x = date('Y');
                      for ($i=2011; $i <= $x ; $i++) { 
                      ?>
                      <option value="<?php echo $i; ?><?php echo "/"; ?><?php echo $i+1; ?>" <?php if($i."/".($i+1)==$tahunajaran){echo "selected";} ?>><?php echo $i; ?><?php echo "/"; ?><?php echo $i+1; ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>  
                </div>
                  
                 
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10" style="display: -webkit-box;">
                      <input type="hidden" name="no_induk_db" value="<?php echo $No_Induk; ?>">
                      <input type="hidden" name="thn_ajaran_numpang" value="<?php echo $thn_ajaran_; ?>">
                      <button class="btn btn-success" type="submit" name="edit">Simpan</button>&nbsp;
                      </form>
                      <form action="anggota_data.php" method="GET">
                        <input type="hidden" name="thn_a" value="<?php echo $thn_ajaran_; ?>">
                      <button class="btn btn-theme" type="submit">Kembali</button>
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
