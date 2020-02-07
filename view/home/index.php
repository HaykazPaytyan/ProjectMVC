<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="/public/css/main.css">
	<link rel="stylesheet" type="text/css" href="/public/css/reset.css">
	<link rel="stylesheet" type="text/css" href="/public/css/media.css">
	<link rel="stylesheet" type="text/css" href="/public/css/bootstrap.css">
</head>

<body>
	<header class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<form class="login-form" method="POST" action="/login" id="log-in">
						<div class="form-group">
							<div class="row">
								<div class="col">
									<input type="email" name="log_email" class="form-control" id="log_email" aria-describedby="emailHelp" placeholder="Email">
									<span id="log_email_required"></span>
								</div>
								<div class="col">
									<input type="password" name="log_pwd" class="form-control" id="log_pwd" placeholder="Password">
									<span id="log_pass_required"></span>
								</div>
								<div class="col">
									<button type="submit" name="log_in" class="btn btn-primary">sign-in</button>
								</div>
							</div>
						</div>
					</form>
				</div>	
			</div>
		</div>
	</header>
	<section class="content">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-md-6">
					<div class="welcome-msg">
						<h1>Welcome Our Page</h1>
						<br/>
					</div>
				</div>
				<div class="col-md-6">
					<form method="POST" action="/register" class="register-form" id="register">
						<div class="form-group">
							<div class="row">
								<div class="col">
									<label for="reg_fname">Firstname</label>
									<input type="text" name="reg_fname" class="form-control" id="reg_fname" placeholder="Enter Firstname">
									<span id="reg_fname_required"></span>
								</div>
								<div class="col">
									<label for="reg_lname">Lastname</label>
									<input type="text" name="reg_lname" class="form-control" id="reg_lname" placeholder="Enter Lastname">
									<span id="reg_lname_required"></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="reg_email">Email address</label>
							<input type="email" name="reg_email" class="form-control" id="reg_email" placeholder="Enter Email">
							<span id="reg_email_required"></span>
						</div>
						<div class="form-group">
							<label for="reg_pwd">Password</label>
							<input type="password" name="reg_pwd" class="form-control" id="reg_pwd" placeholder="Enter Password">
							<span id="reg_pwd_required"></span>
						</div>
						<div class="form-group">
							<label for="reg_pwd_rpt">Password</label>
							<input type="password" name="reg_pwd_rpt" class="form-control" id="reg_pwd_rpt" placeholder="Repeat Password">
							<span id="reg_pwd_rpt_required"></span>
						</div>
						<button type="submit"  class="btn btn-primary">Register</button>
					</form>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript" src="/public/js/validate.js"></script>

</body>

</html>