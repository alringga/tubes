<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIMPATI</title>
  
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/style.css">
  

<body>
  <!--header-->
  <header class="main-header" id="home">
    <div class="bg-color">
      <!--nav-->
      <nav class="nav navbar-default navbar-fixed-top bg-dark">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                            <span class="fa fa-bars"></span>
                        </button>
              <a href="index" class="navbar-brand">SIMPATI</a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="mynavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#home">Home</a></li>
                <li><a href="#datakorban">Data Korban</a></li>
                <li><a href="#peta">Peta</a></li>
                <li><a href="#akun">Akun</a></li>
                >
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <!--/ nav-->
      <div class="container text-center">
        <div class="wrapper wow fadeInUp delay-05s">
          <h3 class="title">SIMPATI</h3>
          <h4 class="sub-title">Sistem Pemetaan Triase Korban Bencana</h4>
          <p>Sebuah Aplikasi berbasis web untuk menentukan tingkatan triase korban bencana dengan cepat</p>
        </div>
      </div>
    </div>
  </header>
  <section class="section-padding container">
    <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                      <p>Macam Macam Arti Warna Triase</p>
                      <p>Hijau : Cedera minor tidak terlalu prioritas dalam penanganan</p>
<p>Kuning : Cedera tidak terlalu berat sehinggga pasien butuh penanganan namun tidak prioritas</p>
<p>Merah : Pasien mengalami koma atau cedera sangat berat sehingga butuh penanganan segera</p>
<p>Hitam : Pasien sudah tidak terselamatkan atau meninggal</p>
</div>
</div>
</div>
</div>

    
  </section>
  <!--/ header-->
  <!---->
  <section id="datakorban" class="section-padding container">
      <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Data Korban</h2>   
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr /> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tabel Korban
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                  <div class="row"><div class="col-sm-6"><div class="dataTables_length" id="dataTables-example_length"><label><select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm"><option value="10">10</option></select> records per page</label></div></div><div class="col-sm-6"><div id="dataTables-example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" aria-controls="dataTables-example"></label></div></div></div>
                                    <thead>
                                        <tr>
                                            <th>Nama Depan</th>
                                            <th>Nama Belakang</th>
                                            <th>Umur</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Nomer ktp</th>
                                            <th>Triase</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php foreach($korban as $row) { ?> 
                                        <tr>
                                            <td><?= $row['nama_dpn']?></td>
                                            <td><?= $row['nama_blkng']?></td>
                                            <td><?= $row['umur']?></td>
                                            <td><?= $row['jenis_klmn']?></td>
                                            <td><?= $row['alamat']?></td>
                                            <td><?= $row['no_ktp']?></td>
                                            <td><?= $row['triase']?></td>
                                        </tr>
                                    <?php } ?>

                                    </tbody>
                                </table>
                                 
                            </div>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            
        </div>
  </section>
  <section class="section-padding wow fadeInUp delay-05s" id="peta">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15815.89421736329!2d110.40833415!3d-7.68598665!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbd93742d6ae5937c!2sFakultas+Teknologi+Industri+UII!5e0!3m2!1sid!2sid!4v1545057453211" width="1350" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>
  <!---->
  
  <!---->
  <section class="main-header" id="akun">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <div class="section-title">
            <h2 class="head-title"><center>Masuk Akun</center></h2>
            <hr class="botm-line">
          </div>
        </div>
        <div class="container" style="padding-top: 100px; width: 400px;">
<div class="alert alert-info shadow p-3 mb-5 rounded" role="alert">
<h4 class="alert-heading" style="font-family: arial;"> <b>Log In</b></h4>



  <div class="btn-group" role="group" aria-label="Basic example" style="padding-top: 15px;">
  <a href="<?= base_url('far_controller/tampilLoginSar')?>" class="btn btn-danger square-btn-adjust">Tim Sar</a>
  <a href="tampilLogindinas" class="btn btn-danger square-btn-adjust">Dinas</a>
</div>
</div>

      </div>
    </div>
  </section>
  <!---->
  <!---->
  
  <!---->
  <footer class="" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 footer-copyright">
          © Far Crew - All rights reserved
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bethany
            -->
            Designed by <a href="https://bootstrapmade.com/">FarCrew</a>
          </div>
        </div>
        <div class="col-sm-5 footer-social">
          <div class="pull-right hidden-xs hidden-sm">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!---->
  <!--contact ends-->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>
</html>
