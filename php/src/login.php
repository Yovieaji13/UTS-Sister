
<html>
   
   <head>
		<title>Login | Perpustakaan</title>
		<link href="template/css/bootstrap.min.css" rel="stylesheet" />
		<link href="template/css/sb-admin-2.css" rel="stylesheet" />
		<script src="template/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="template/alert.css">
   </head>
   <body>
   <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
					<div class="panel-heading">
                        <h3 class="panel-title">Silahkan Login</h3>
                    </div>
                    <div class="panel-body">
						<form action= "logintry.php" method = "post" >
						<fieldset>

			
						<br>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="username, contoh : ARY" name="username" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Enter Password" name="password" required>
						</div>	
						<div class="form-group">
							<button type="submit" class="btn btn-md btn-primary btn-block">Login</button>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<span class="psw">belum punya akun <a href="register.php">daftar disini?</a></span>
							</div>
						</div>
						</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	 </div>
   </body>
</html>