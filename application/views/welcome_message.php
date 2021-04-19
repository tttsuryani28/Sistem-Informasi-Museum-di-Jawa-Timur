<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Museum di Jawa</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url('css/bootstrap.css') ?>" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url('css/font-awesome.css') ?>" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url('js/morris/morris-0.4.3.min.css') ?>" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url('css/custom.css" rel="stylesheet') ?>" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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
                <a class="navbar-brand" href="#">Museum</a> 
            </div>

  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">&nbsp; 


<a href="#" class="btn btn-warning square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">

                    <img src="<?php echo base_url('img/find_user.png') ?>" class="user-image img-responsive"/>
					</li>
                   <li>
                        <a href="<?php echo base_url('admin/c_data_museum/data_museum')?>">
                            <i class="fa fa-dashboard fa-3x"></i>
                            <span>Data Museum</span>
                        </a>
                    </li>
                    <li>
                    <a href="<?php echo base_url('admin/c_data_koleksi/data_koleksi')?>">
                             <i class="fa fa-desktop fa-3x"></i> 
                            <span>Data Koleksi</span>
                        </a>
                    </li>
                     <li>
                    <a href="<?php echo base_url('admin/c_data_kota/data_kota')?>">
                         <i class="fa fa-table fa-3x""></i>
                            <span>Data Kota</span>
                        </a>
                    </li> 
                    <li>
                    <a href="<?php echo base_url('admin/c_data_pameran/data_pameran')?>">
                           <i class="fa fa-bar-chart-o fa-3x"></i>
                            <span>Data Pameran</span>
                        </a>
                    </li>    
                    <li>     
                </ul>
            </div>   
        </nav>  
        <div id="page-wrapper" >
    <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="col-lg-12 grid-margin stretch-card">
            <div id="page-inner">
                <div class="row">
                    <div class="col">
                     <center><h2 style="color: orange">Selamat Datang di Halaman Admin </h2>
                      <h1 style="color: orange" >Museum Jawa Timur</h1>
                      <img style="width: 13cm;" src="<?php echo base_url('img/museum.png') ?>" />
                    </center>   
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

            <script src="<?php echo base_url('assets/js/jquery-1.10.2.js') ?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url('assets/js/jquery.metisMenu.js') ?>"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="<?php echo base_url('assets/js/morris/raphael-2.1.0.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/morris/morris.js') ?>"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
    
   
</body>
</html>
