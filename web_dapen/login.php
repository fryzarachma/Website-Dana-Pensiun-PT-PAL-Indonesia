<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form Login</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
	<style> /* css untuk mengatur tampilan login supaya berada di tengah */
		#index{
   			margin-top: 110px;
			margin-left: 430px;
		}
		.jumbotron {
    		position: relative;
    		background: #000 url("images/banner/pal10.jpg") center;
			width: 30%;
    		height: 30%;
    		background-size: cover;
			overflow: hidden;
		}
		body { 
			background-color:#D2B48C; 
		}

	</style>
</head>
<body> <!-- untuk memberi background -->
<br><br><br><br><br>
<div class="container">
	<center>
		<div class="jumbotron">
				 <!-- membuat tabel latar -->
				<form action="ceklogin.php" class="inner-login" method="post"> <!-- supaya bisa di proses di ceklogin.php -->
				<h2 class="text-center title-login"><b><font color="white">Login Admin</b></font></h2> 
				<br><br>
            	<div class="form-group"> <!-- agar tulisan username dan inputan bisa satu grup -->
					<label for="input-id" class="cal-sm-2"><font color="white">USERNAME</label>
               		<input type "text" name="username" class="form-control" value="">
           		</div>
        		<div class="form-group"><!-- agar tulisan password dan inputan bisa satu grup -->
					<label for="input-id" class="cal-sm-2"><font color="white">PASSWORD</label>
                	<input type="password" name="password" class="form-control" value="">
				</div>
					<input type="submit" name="submit" class="btn btn-info btn-lg btn-block" value="Login" /><br>
					<!-- <center><p><a href="indexcostumer.php" class="btn btn-success btn-lg btn-block"><b>Login Costumer<b></a><p></center> -->
					<!-- <center><p><a href="registerku.php" class="btn btn-danger btn-lg btn-block"><b>Register<b></a><p></center> -->
				</div>
		</div>
	</div>
	
</div>


	
</body>
</html>