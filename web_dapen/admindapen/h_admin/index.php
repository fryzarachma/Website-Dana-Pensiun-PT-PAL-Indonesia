<!DOCTYPE html>
<?php 
	error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
	include "../k.php";
	session_start();
	date_default_timezone_set('Asia/Jakarta');
	
	if(isset($_REQUEST['gol'])){
		session_unset();
		session_destroy();	
		echo "<script>document.location='../index.php'</script>";
	}
	if($_SESSION['nama'] != 'Admin'){
	?>
        	<script type="text/javascript">
				alert("anda harus melakukan login terlebih dahulu untuk bisa mengaksesnya");
			</script>
       		<?php
	echo"<script>document.location='../index.php'</script>";
	}
	
	$jumd=mysqli_query($connect, "SELECT * FROM dokumen ");
	// $jumd=mysqli_num_rows($jumd);
	

?>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Admin Dapen</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />
		<link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />
	

		<script src="../assets/js/ace-extra.min.js"></script>

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="../assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="../assets/css/chosen.min.css" />
		<link rel="stylesheet" href="../assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="../assets/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="../assets/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="../assets/css/bootstrap-colorpicker.min.css" />
		<link rel="stylesheet" href="../assets/css/custom.css" />

	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<img class="nav-user-photo" width="53px" src="../assets/images/logodp00.jpg" alt="File" />
							Admin Dana Pensiun
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="../assets/images/avatars/admin.png" alt="Admin" />
								<span class="user-info">
									<small>Welcome,</small>
									Admin
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li class="divider"></li>
								<li>
									<a href="../index.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
								<li class="divider"></li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

			<div class="sidebar-shortcuts" id="sidebar-shortcuts" style="background: #8ecff5; color:#013197; border: 3px solid #f2f2f2; padding: 5px;">
					<marquee onmouseout="this.start()" onmouseover="this.stop()" scrollamount="5">SELAMAT DATANG DI APLIKASI ADMIN DANA PENSIUN KARYAWAN PT. PAL INDONESIA</marquee>
				</div>

				<ul class="nav nav-list">
					<li class="active">
						<a href="index.php"><i class="menu-icon fa fa-tachometer"></i><span class="menu-text"> Dashboard </span></a>
					</li>
					<li class="">
						<a href="index.php?dokumen_detail"><i class="menu-icon fa fa-book"></i><span class="menu-text"> Dokumen </span></a>
					</li>
					<li class="">
						<a href="index.php?gambar_detail"><i class="menu-icon fa fa-camera"></i><span class="menu-text"> Gambar </span></a>
					</li>
					<li class="">
						<a href="index.php?berita_detail"><i class="menu-icon fa fa-list"></i><span class="menu-text"> Berita </span></a>
					</li>
					<li class="">
						<a href="index.php?laporan"><i class="menu-icon fa fa-file"></i><span class="menu-text"> Laporan Kepesertaan </span></a>
					</li>
					<li class="">
						<a href="index.php?laporan_keuangan"><i class="menu-icon fa fa-file"></i><span class="menu-text"> Laporan Keuangan</span></a>
					</li>
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
				
			</div>

			<?php
			if(isset($_REQUEST['dashboard'])){
				include("dashboard.php");
			}
			else if(isset($_REQUEST['proyek'])){
				include("proyek.php");
			}
			else if(isset($_REQUEST['jenis'])){
				include("jenis.php");
			}
			else if(isset($_REQUEST['user'])){
				include("user.php");
			}
			else if(isset($_REQUEST['penyimpanan'])){
				include("penyimpanan.php");
			}
			else if(isset($_REQUEST['dokumen'])){
				include("dokumen.php");
			}
			else if(isset($_REQUEST['dokumen_detail'])){
				include("dokumen_detail.php");
			}
			else if(isset($_REQUEST['gambar_detail'])){
				include("gambar_detail.php");
			}
			else if(isset($_REQUEST['aktivitas'])){
				include("aktivitas.php");
			}
			else if(isset($_REQUEST['berita_detail'])){
				include("berita_detail.php");
			}
			else if(isset($_REQUEST['laporan'])){
				include("laporan.php");
			}
			else if(isset($_REQUEST['laporan_keuangan'])){
				include("laporan_keuangan.php");
			}
			else{
				include("dashboard.php"); 
			} ?>

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Develop by Divisi Teknologi Informasi</span>
							&copy; 2020
						</span>

						&nbsp; &nbsp;
						
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		
	</body>
</html>

