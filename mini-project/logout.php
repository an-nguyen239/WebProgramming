<?php
session_start();
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
	<script>
		let countDownDate = new Date("Apr 27, 2020 12:00:00").getTime();
		let x = setInterval(function() {
			let now = new Date().getTime();
			
			let dayLeft = countDownDate - now;
			
			let days = Math.floor(dayLeft / (1000 * 60 * 60 * 24));
			let hours = Math.floor((dayLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			let minutes = Math.floor((dayLeft % (1000 * 60 * 60)) / (1000 * 60));
			let seconds = Math.floor((dayLeft % (1000 * 60)) / 1000);
			
			document.getElementById("countDown").innerHTML = days + "d " + hours + "h "
			+ minutes + "m " + seconds + "s ";
			
			if (dayLeft < 0) {
				clearInterval(x);
				document.getElementById("countDown").innerHTML = "EXPIRED";
			}
		}, 1000);
	</script>
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

	<div class="container">

		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3>Welcome
						<?php
						echo (isset($_SESSION["username"])) ? $_SESSION["username"] : "";
						?>
					</h3>

				</div>
				<div style="text-align: center">
					<p>Day until end of semester: </p>
					<p id="countDown"></p>
				</div>

				<form class="logout_form" method="post" action="">
					<input type="submit" name="submit" value="Logout" class="btn logout_btn">
				</form>
			</div>
		</div>
	</div>
	<?php
	if(isset($_POST['submit'])){
		unset($_SESSION['username']);
		header('LOCATION:index.php');
	}
	?>
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