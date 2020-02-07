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
	<header class="dash-banner">
		<a href="/out" class="badge badge-light sign-out">Sign-out</a>
		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<div class="dash-slogan">
						<h1>Welcome <?php print($row['usr_fname']);?></h1>
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</header>
	<section class="personal">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="avatar-wrap">
						<img src="/public/img/download.jpg" class="avatar">
					</div>
				</div>
				<div class="col-md-8">
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="personal-data">
						<h1>Personal Data</h1>
						<br/>
						<h3>Firstname : <?php print($row['usr_fname']);?></h3>
						<br/>
						<h3>Lastname : <?php print($row['usr_lname']);?></h3>
						<br/>
						<h3>Email : <?php print($row['usr_email']);?></h3>
					</div>
				</div>
				<div class="col-md-8">
					
				</div>
			</div>
		</div>
	</section>
</body>

</html>