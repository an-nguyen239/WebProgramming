<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/b014c0fe38.js" crossorigin="anonymous"></script>
	
	<title>Car rental</title>

	
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
					<a class="nav-link active" href="index.php">Home</a>
				</li>
				
				<li class="nav-item">
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



	<div class="parallax">
		<div class="welcome">Welcome
			<?php 
			echo (isset($_SESSION["username"])) ? $_SESSION["username"] : "";
			?>
		to Car X</div>
	</div>
	<div class="customSelect">
		<select id="carMake">
			<option value="0">Select car:</option>
			<option value="Audi">Audi</option>
			<option value="BMW">BMW</option>
			<option value="Citroen">Citroen</option>
			<option value="Ford">Ford</option>
			<option value="Honda">Honda</option>
			<option value="Jaguar">Jaguar</option>
			<option value="Land Rover">Land Rover</option>
			<option value="Mercedes">Mercedes</option>
			<option value="Mini">Mini</option>
			<option value="Nissan">Nissan</option>
			<option value="Toyota">Toyota</option>
			<option value="Volvo">Volvo</option>
		</select>
		<select id="type">
			<option value="0">Select Type:</option>
			<option value="Used">Used</option>
			<option value="New">New</option>
		</select>
		<select id="transmission">
			<option value="0">Select Transmission:</option>
			<option value="Automatic">Automatic</option>
			<option value="Manual">Manual</option>
		</select>
		<select id="year">
			<option value="0">Select Year:</option>
			<option value="2017">2017</option>
			<option value="2018">2018</option>
			<option value="2019">2019</option>
			<option value="2020">2020</option>
		</select>
		<button type='button' onclick="find()" class="button">Find</button>
	</div>
	<script type="text/javascript" src="cookies.js"></script>
	
	<hr>
	<div class="feature-car">
		<h1>Feature car</h1>
		
		<div class="grid-container">
			<figure>
				<img src="img/audi-a7.jpeg">
				<figcaption>
					<i class="fas fa-car"></i><strong>  Audi-A7</strong><br>
					<i class="fas fa-road"></i>  4,000km 
					<i class="fas fa-gas-pump"></i>  Petrol<br>
					<i class="fas fa-tools"></i>  Automatic 
					<i class="fas fa-cogs"></i>  Black <br>
					
				</figcaption>
			</figure>
			<figure>
				<img src="img/bmw-i8.jpeg">
				<figcaption>
					<i class="fas fa-car"></i><strong>  BMW-IZ8</strong><br>
					<i class="fas fa-road"></i>  2,000km 
					<i class="fas fa-gas-pump"></i>  Petrol<br>
					<i class="fas fa-tools"></i>  Automatic 
					<i class="fas fa-cogs"></i>  Orange <br>
				</figcaption>
			</figure>
			<figure>
				<img src="img/mercedes.jpeg">
				<figcaption>
					<i class="fas fa-car"></i><strong>  Mercedes</strong> <br>
					<i class="fas fa-road"></i>  3,000km 
					<i class="fas fa-gas-pump"></i>  Petrol<br>
					<i class="fas fa-tools"></i>  Automatic 
					<i class="fas fa-cogs"></i>  Gray <br>
					
				</figcaption>
			</figure>

			<figure>
				<img src="img/toyota.jpeg">
				<figcaption>
					<i class="fas fa-car"></i><strong>  Toyota</strong> <br>
					<i class="fas fa-road"></i>  3,500km 
					<i class="fas fa-gas-pump"></i>  Petrol<br>
					<i class="fas fa-tools"></i>  Manual 
					<i class="fas fa-cogs"></i>  Red <br>
					
				</figcaption>
			</figure>
			
		</div>
	</div>
	
	<hr>
	<div class="offer-car">
		<h1>Latest offer</h1>
		<p><strong>Win a chance to go the extra mile in style.</strong></p>
		<p>We see you go the extra mile for others. So, we are doing the same for you with this chance to win a one-week rental from our premium fleet.</p>
		<div class="offer-container">
			<div class="offer1">
				<img src="img/offer1.jpg" padding="50">
				<br>
				<img src="img/offer4.jpg">
			</div>
			<div class="offer2">
				<img src="img/offer2.jpg">
			</div>
			<div class="offer3">
				<img src="img/offer3.jpg">
				<br>
				<img src="img/offer5.jpg">
			</div>
		</div>
	</div>
	<hr>
	<div class="agent">
		<h1>Our agent</h1>
		<p>Our team of agents are ready to help you reach your car renting goals by making your needs our number one priority</p>
		<div class="detail">
			<img src="img/agent1.jpg">
			<p>Carolyn</p><br>
			<p>Director</p>
		</div>

		<div class="detail">
			<img src="img/agent2.jpg">
			<p>Martin Smith</p><br>
			<p>Chief of Engineer</p>
		</div>
		<div class="detail">
			<img src="img/agent3.jpg">
			<p>Michelle Nelson</p><br>
			<p>Manager</p>
		</div>
		<div class="detail">
			<img src="img/agent4.jpg">
			<p>Michelle Nelson</p><br>
			<p>Support Manager</p>
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