<?php
session_start();
if (!empty($_POST['conditions'])) {

	$_SESSION['conditions'] = implode(",",  $_POST['conditions']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Free Visual Stress Test</title>
	<meta name="keywords" content="Free Visual Stress Test, Opticalm" />
	<meta name="description" content="Opticalm | Free Visual Stress Test" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<!-- Fonts Google -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet" />
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/main.css">
	<!-- Tablet -->
	<link rel="stylesheet" media="(max-width:768px)" href="css/tablet.css" />
	<link rel="stylesheet" media="(max-width:500px)" href="css/mobile.css" />
</head>

<body>
	<header class="bg-light">
		<div class="container">
			<nav id="navbar">
				<ul>
					<li class="nav-item">
						<img src="assets/logo.png" alt="Visual Stress Solution" weight="70px" height="70px">
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Home</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Free Visual Stress Test</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">View Visual Test</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Create New Referral</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">About</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Contact</a>
					</li>
					<i class="fas fa-user" style="color:#662E8D ;"></i>
					<li class="nav-item dropdown ">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">My Account</a>
						<div class="dropdown-menu">
							<a href="#" class="dropdown-item">Dashboard</a>
							<a href="#" class="dropdown-item">Change Password</a>
							<a href="#" class="dropdown-item">Logout</a>
						</div>
					</li>
				</ul>
			</nav>
		</div>

	</header>
	<h2 id="header">Free Visual Stress Test</h2>


	<div class="form-group">
		<form class="col-12" action="index4.php" method="POST">
			<h6>Do you have sensitivities to patterns?</h6>
			<span>Please concentrate for a minute on a densely printed black and white page of text.(click show box below)</span>
			<span>Then answer these questions:</span>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="text" value="text">
				<label class="form-check-label" for="text">Show block of text</label>
			</div>
			<br></br>
			<h6>1) Do you see any of the following in the words or letters?</h6>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck31" value="Blur">
				<label class="form-check-label" for="defaultCheck31">Blur</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck32" value="Double">
				<label class="form-check-label" for="defaultCheck32">Double</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck33" value="Fade">
				<label class="form-check-label" for="defaultCheck33">Fade</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck34" value="Move">
				<label class="form-check-label" for="defaultCheck34">Move</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck35" value="Shake">
				<label class="form-check-label" for="defaultCheck35">Shake</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck36" value="Shimmer">
				<label class="form-check-label" for="defaultCheck36">Shimmer</label>
				<h6>(choose all that apply)</h6>
			</div>
			<br></br>
			<h6>2) Is there any movement on the page or behind the text?</h6>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck37" value="1" name="Movement">
				<label class="form-check-label" for="defaultCheck37">Yes</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck38" value="0" name="Movement">
				<label class="form-check-label" for="defaultCheck38">No</label>
			</div>
			<br></br>
			<h6>3) Do you see colours or lights on the page?</h6>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck39" value="1" name="clop">
				<label class="form-check-label" for="defaultCheck39">Yes</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck40" value="0" name="clop">
				<label class="form-check-label" for="defaultCheck40">No</label>
			</div>
			<br></br>
			<h6>4) Is the page uncomfortable to look at?</h6>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck41" value="1" name="uncomfortable">
				<label class="form-check-label" for="defaultCheck41">Yes</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck42" value="0" name="uncomfortable">
				<label class="form-check-label" for="defaultCheck42">No</label>

			</div>
			<a href="index2.php" class="btn btn-primary">Back</a>
			<button type="submit" value="Continue" class="btn btn-primary">
				Contine
			</button>
		</form>
	</div>
	<div class="footer">
		<p>Copyright © 2021 Opticalm | Powered by Opticalm</p>
	</div>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>

</html>