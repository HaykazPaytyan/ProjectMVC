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
	<section class="verify-content">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="verification-msg">
						<h1>Verification Is Successful</h1>
					</div>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<form class="login-form" method="POST" action="/login" id="log-in">
						<div class="form-group">
							<input type="email" name="log_email" class="form-control" id="log_email" aria-describedby="emailHelp" placeholder="Email">
							<span id="log_email_required"></span>
						</div>
						<div class="form-group">
							<input type="password" name="log_pwd" class="form-control" id="log_pwd" placeholder="Password">
							<span id="log_pass_required"></span>
						</div>
						<button type="submit" name="log_in" class="btn btn-primary">sign-in</button>
                    </form>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</section>
</body>

</html>