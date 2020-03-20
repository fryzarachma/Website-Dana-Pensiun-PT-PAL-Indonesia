<!DOCTYPE html>
<?php
include("k.php");
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);

if(isset($_POST['login'])){
		//$username=anti_injection($_POST['username']);
		//$password=anti_injection($_POST['password']);
		//$key=anti_injection($_POST['keyy']);

	$username=$_POST['username'];
	$password=$_POST['password'];
	$password=md5($password);


	$login="SELECT * FROM tb_admin WHERE username='$username' AND password='$password'";
	$sql = mysqli_query($connect, $login);
	if ($login === FALSE) {
		die(mysql_error());
	}

	$ketemu=mysqli_num_rows($sql);
	$p=mysqli_fetch_array($sql);

	if ($ketemu > 0){
			session_start();
			$_SESSION['nama'] 		= "Admin";
			echo "<script>document.location='h_admin/index.php'</script>";
	}else{
		if(session_start());
		$_SESSION['username']  	= $p['username'];
		$_SESSION['password']	= $p['password'];
		echo "<script>document.location='h_admin/index.php'</script>";
		}
		echo "<script language=\"Javascript\">\n";
		echo "alert('Username atau Password anda salah, silahkan memasukkanya kembali.');";
		echo "</script>";	
	}	




?>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page - Dana Pensiun</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />
		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
	</head>

	<body class="login-layout" style="background-image: url('assets/images/pal.jpg');background-size:cover">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<br><br><img class="nav-user-photo" width="120px" src="assets/images/Logodp00.jpg" alt="File" /><br>
									<b><span class="red">ADMIN</span>
									<span class="Blue" id="id-text2">PANEL</span></b>
								</h1>
								<h4 class="blue" id="id-company-text"> Dana Pensiun PT PAL Indonesia (Persero)</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="toolbar clearfix">
											&nbsp
										</div>
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-key green"></i>
												Enter Your Username & Pass
											</h4>

											<div class="space-6"></div>

											<form method="post" action="">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input name="username" type="text" class="form-control" placeholder="Username" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input name="password" type="password" class="form-control" placeholder="Password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													
													<div class="social-or-login center">
														<span class="bigger-110">||</span>
													</div>
													<div class="clearfix">

														<button name="login" type="submit" class="width-35 pull-right btn btn-sm btn-primary">
														<i class="ace-icon fa fa-key"></i>
														<span class="bigger-110">Login</span>
													</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											

											<div class="space-6"></div>

										</div><!-- /.widget-main -->

										<div class="toolbar clearfix center" >
											<span style="text-align:center;" class="white" id="id-text2"> &copy; Develop by Divisi Teknologi Informasi</span>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->



							</div><!-- /.position-relative -->

						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
	</body>
</html>
