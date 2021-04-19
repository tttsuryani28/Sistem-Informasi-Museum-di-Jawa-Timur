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
                <div >
                    <a style="color: white" class="navbar-brand" href="#">Museum</a> 
                </div>
                
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
        
                </ul>
            </div>   
        </nav>  