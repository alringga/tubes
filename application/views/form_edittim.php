<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dinas</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
     <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/set/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/set/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/set/css/custom.css">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="tampilkorbansar">Tim Sar</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> 
<a href="index" class="btn btn-danger square-btn-adjust">Home</a>
<a href="index" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?= base_url()?>/assets/img/22.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="tampiladminsar"><i class="fa fa-dashboard fa-3x"></i> Data Pribadi</a>
                    </li>
                     <li  >
                        <a  href="tampilkorbansar"><i class="fa fa-table fa-3x"></i> Data Korban </a>
                    </li>
                     <li>
                        <a href="tampilalatsar"><i class="fa fa-dashboard fa-3x"></i> Tambah Alat</a>
                    </li>
                   
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2><center>Edit Data Korban</center></h2>   
                     <br>
                       
                    </div>
                    <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
      <form method="POST" action="<?php echo base_url()."index.php/far_controller/do_update"; ?>">
        <div class="form-group">
          <label> Nama Depan</label>
          <input type="text" name="nama_depan" class="form-control">
        </div>
        <div class="form-group">
          <label> Nama Belakang</label>
          <input type="text" name="nama_belakang" class="form-control">
        </div>
        <div class="form-group">
          <label> Umur</label>
          <input type="text" name="umur" class="form-control">
        </div>
        <div class="form-group">
          <label> Jenis Kelamin</label><br>
          <input type="radio" name="jenis_kelamin" value="p">Pria
          <input type="radio" name="jenis_kelamin" value="w">Wanita
        </div>
       <div class="form-group">
          <label> Alamat</label>
          <input type="textarea" name="alamat" class="form-control">
        </div>
        <div class="form-group">
          <label> No KTP</label>
          <input type="text" name="no_ktp" class="form-control">
        </div>
        <div class="form-group">
          <label> Triase</label>
          <input type="text" name="Triase" class="form-control">
        </div>
        <div>
          <td><input class="btn btn-primary" type="submit" name="btnSubmit" value="Simpan"></td>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

        
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
