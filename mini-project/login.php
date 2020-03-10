<?php
session_start();
if(isset($_SESSION["username"])){
	header("location:logout.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<script src="https://kit.fontawesome.com/b014c0fe38.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="login.css">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Car X</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				
				<li class="nav-item active">
					<a class="nav-link" href="login.php">Client</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.html">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="faq.html">FAQ</a>
				</li>
			</ul>
		</div>
	</nav>

	<?php
	if(isset($_POST['submit'])){
		$username = $_POST['username']; $password = $_POST['password'];
		if($password === 'guest'){
			$_SESSION['username'] = $username;
			header('LOCATION:logout.php');
		} {
			echo "<div class='alert alert-danger'>Username and Password do not match.</div>";
		}
	}
	?>
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3>Sign In</h3>
				</div>
				<div class="card-body">
					<form method="post" action="">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" name="username" placeholder="username">

						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" name="password" placeholder="password">
						</div>
						<div class="form-group">
							<input type="submit" name="submit" value="Login" class="btn float-right login_btn">
						</div>
					</form>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						Don't have an account?<a href="#">Sign Up</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="inner_footer">
			<div class="logo_container">
				<h1>Car X</h1>
			</div>

			<div class="footer_third">
				<h1>Need Help?</h1>
				<a href="#">Terms &amp; Conditions</a>
				<a href="#">Privacy Policy</a>
			</div>

			<div class="footer_third">
				<h1>USEFUL LINKS</h1>
				<a href="#">Home</a>
				<a href="https://www.youtube.com/watch?v=BMu9yrq_ZMI">About Us</a>
				<a href="#">Services</a>
				<a href="#">Faq</a>
				<a href="#">Contact Us</a>
				<a href="#">Car Reviews</a>
			</div>

			<div class="footer_third">
				<h1>Follow Us</h1>
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>

				<span>
					World Car Renting <br>
					US & America - 11223344 <br>
					Unit 456, The Car Factory <br>
					88 Toyota Street <br>
				</span>

			</div>
		</div>
	</div>
</body>
</html>