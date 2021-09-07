<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../aPanel/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
    <!-- Main Content -->
	<div class="container-fluid">
		<div class="row main-content bg-success text-center">
			<div class="col-md-4 text-center company__info">
				<span class="company__logo"><i class="fab fa-cpanel fa-8x"></i></span>
				<h4 class="company_title"></h4>
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="text-center ">
						<h2 class="pt-4">Log In</h2>
					</div>
					<div class="row">
						<form control="" class="">
							<div class="col-12">
								<input type="text" name="username" id="username" class="form__input" placeholder="Username">
							</div>
							<div class="col-12">
								<!-- <span class="fa fa-lock"></span> -->
								<input type="password" name="password" id="password" class="form__input" placeholder="Password">
							</div>
							<div class="col-8 text-left">
								<input type="checkbox" name="remember_me" id="remember_me" class="">
								<label for="remember_me" class="">Remember Me!</label>
							</div>
							<div class="row">
                                <div class="col-5">
								<input type="submit" value="Submit" class="btn">
                                </div>
							</div>
						</form>
					</div>
					<div class="text-left">
						<p>Don't have an account? <a href="#">Register Here</a> or <a href="../aPanel/index/index.php" target="_blank">jump to panel</a> </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
    <footer class="fixed-bottom">
	<div class="container-fluid text-center footer">
		Coded with &hearts; by <a href="https://bit.ly/yinkaenoch">Yinka.</a></p>
	</div>
    </footer>
</body>
</html>
<!-- header("Location:index/index.html"); -->