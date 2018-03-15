<!DOCTYPE html>
<html>
<head>
	<title>Login and Signup form prototype</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/script.js"></script>
</head>
<body>
	<div class="container-fluid col-md-12 form-body">
		<div class="row option-select">
			<div class="col-md-6 active">
				<button type="submit" id="login-btn">Login</button>
			</div>
			<div class="col-md-6">
				<button type="submit" id="signup-btn">Signup</button>
			</div>
		</div>
		<div class="row login-form" id="login-form">
			<div class="col-md-12">
				<input type="text" name="username1" placeholder="Enter username">
				<input type="password" name="password" placeholder="Enter Password">
			</div>
			<div class="col-md-4 col-sm-12 submit-button">
				<input type="submit" value="Login">
			</div>
		</div>
		<div class="row signup-form" id="signup-form">
			<div class="col-md-12">
				<form method="POST" action="signup.php">
					<input type="text" name="fullname" placeholder="Enter Full Name">
					<input type="text" name="username" placeholder="Enter Username">
					<input type="text" name="email" placeholder="Enter Email-Address">
					<input type="number" name="phone" placeholder="Enter Phone Number">
					<input type="password" name="password" placeholder="Enter Password">
					<!-- <div class="col-md-4 col-sm-12 submit-button"> -->
						<input class="col-md-4 col-sm-12 submit-button" type="submit" name="submit" value="Signup">
					<!-- </div> -->
				</form>
			</div>	
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>