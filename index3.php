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
		<form class="col-12">
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
				<input class="form-check-input" type="checkbox" id="defaultCheck31" value="option31">
				<label class="form-check-label" for="defaultCheck31">Blur</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck32" value="option32">
				<label class="form-check-label" for="defaultCheck32">Double</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck33" value="option33">
				<label class="form-check-label" for="defaultCheck33">Fade</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck34" value="option34">
				<label class="form-check-label" for="defaultCheck34">Move</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck35" value="option35">
				<label class="form-check-label" for="defaultCheck35">Shake</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck36" value="option36">
				<label class="form-check-label" for="defaultCheck36">Shimmer</label>
				<h6>(choose all that apply)</h6>
			</div>
			<br></br>
			<h6>2) Is there any movement on the page or behind the text?</h6>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck37" value="option37">
				<label class="form-check-label" for="defaultCheck37">Yes</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck38" value="option38">
				<label class="form-check-label" for="defaultCheck38">No</label>
			</div>
			<br></br>
			<h6>3) Do you see colours or lights on the page?</h6>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck39" value="option39">
				<label class="form-check-label" for="defaultCheck39">Yes</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck40" value="option40">
				<label class="form-check-label" for="defaultCheck40">No</label>
			</div>
			<br></br>
			<h6>4) Is the page uncomfortable to lookat?</h6>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck41" value="option41">
				<label class="form-check-label" for="defaultCheck41">Yes</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck42" value="option42">
				<label class="form-check-label" for="defaultCheck42">No</label>

			</div>

			<div class="">
				<a href="index2.html" class="btn btn-primary">Back</a>
				<a href="#" class="btn btn-primary" onclick="loadAndSave()">Submit</a>

			</div>
		</form>
	</div>
	<div class="footer">
		<p>Copyright © 2021 Opticalm | Powered by Opticalm</p>
	</div>

	<script>
		//when inputting into database use variables: 
		//fname, lname, date, email, phone, address, city, state, country, zip, gender,
		//otherIllness, familyHistory,
		//strSensitivities,
		//strDifficulties,
		//sufferFromConditions,
		//symptomsTest,
		//isMovement, seeColours, uncomfortable



		var vcolours, vcontrast, vflicker, vglare, vlight, vmotion, vpatterns

		var vattention, vbalance, vcognitive, vheadache, vperception, vreading, vtracking, vwriting
		var cbColours, cbContrast, cbFlicker, cbGlare, cbLight, cbMotion, cbPatterns
		var cbAttention, cbBalance, cbCognitive, cbHeadache, cbPerception, cbReading, cbTracking, cbWriting
		var cbMTBI, cbConcussion, cbMigraine, cbEpilipsy, cbSpld, cbADHD, cbASD, cbAnxiety, cbChronFatigue, cbVisSnow, cbMS, cbSensoryProcessingDis, cbStroke
		var famHist, other
		var cbBlur, cbDouble, cbFade, cbMove, cbShake, cbShimmer
		var isMovement, seeColours, uncomfortable
		var fname, lname, date, email, phone, address, city, state, country, zip, gender
		var otherIllness, familyHistory
		var strSensitivities
		var strDifficulties
		var sufferFromConditions
		var symptomsTest
		//var checked

		function loadAndSave() {




			save();
			//Sensitivities
			var c1 = JSON.parse(localStorage.getItem('cbColours'));
			var c2 = JSON.parse(localStorage.getItem('cbContrast'));
			var c3 = JSON.parse(localStorage.getItem('cbGlare'));
			var c4 = JSON.parse(localStorage.getItem('cbLight'));
			var c5 = JSON.parse(localStorage.getItem('cbMotion'));
			var c6 = JSON.parse(localStorage.getItem('cbPatterns'));
			var c7 = JSON.parse(localStorage.getItem('cbFlicker'));

			//Create string for sensitivities
			if (c1 == true) {
				cbColours = "Colours, ";
			} else {
				cbColours = "";
			};
			if (c2 == true) {
				cbContrast = "Contrast, ";
			} else {
				cbContrast = "";
			};
			if (c3 == true) {
				cbGlare = "Glare, ";
			} else {
				cbGlare = "";
			};
			if (c4 == true) {
				cbLight = "Light, ";
			} else {
				cbLight = "";
			};
			if (c5 == true) {
				cbMotion = "Motion, ";
			} else {
				cbMotion = "";
			};
			if (c6 == true) {
				cbPatterns = "Patterns, ";
			} else {
				cbPatterns = "";
			};
			if (c7 == true) {
				cbFlicker = "Flicker";
			} else {
				cbFlicker = "";
			};

			//create Sensitivity string --- USE THIS VARIABLE FOR DB
			strSensitivities = cbColours + cbContrast + cbGlare + cbLight + cbMotion + cbPatterns + cbFlicker;



			var c8 = JSON.parse(localStorage.getItem('cbAttention'));
			var c9 = JSON.parse(localStorage.getItem('cbBalance'));
			var c10 = JSON.parse(localStorage.getItem('cbCognitive'));
			var c11 = JSON.parse(localStorage.getItem('cbHeadache'));
			var c12 = JSON.parse(localStorage.getItem('cbPerception'));
			var c13 = JSON.parse(localStorage.getItem('cbReading'));
			var c14 = JSON.parse(localStorage.getItem('cbTracking'));
			var c15 = JSON.parse(localStorage.getItem('cbWriting'));

			if (c8 == true) {
				cbAttention = "Attention/Concentration, ";
			} else {
				cbAttention = "";
			};
			if (c9 == true) {
				cbBalance = "Balance, ";
			} else {
				cbBalance = "";
			};
			if (c10 == true) {
				cbCognitive = "Cognitive Fatigue, ";
			} else {
				cbCognitive = "";
			};
			if (c11 == true) {
				cbHeadache = "Headache, ";
			} else {
				cbHeadache = "";
			};
			if (c12 == true) {
				cbPerception = "Perception, ";
			} else {
				cbPerception = "";
			};
			if (c14 == true) {
				cbTracking = "Tracking, ";
			} else {
				cbTracking = "";
			};
			if (c15 == true) {
				cbWriting = "Writing";
			} else {
				cbWriting = "";
			};
			if (c13 == true) {
				cbReading = "Reading, ";
			} else {
				cbReading = "";
			};

			strDifficulties = cbAttention + cbBalance + cbCognitive + cbHeadache + cbPerception + cbReading + cbTracking + cbWriting;





			var c16 = JSON.parse(localStorage.getItem('cbMTBI'));
			var c17 = JSON.parse(localStorage.getItem('cbConcussion'));
			var c18 = JSON.parse(localStorage.getItem('cbMigraine'));
			var c19 = JSON.parse(localStorage.getItem('cbEpilipsy'));
			var c20 = JSON.parse(localStorage.getItem('cbSpld'));
			var c21 = JSON.parse(localStorage.getItem('cbADHD'));
			var c22 = JSON.parse(localStorage.getItem('cbASD'));
			var c23 = JSON.parse(localStorage.getItem('cbAnxiety'));
			var c24 = JSON.parse(localStorage.getItem('cbChronFatigue'));
			var c25 = JSON.parse(localStorage.getItem('cbVisSnow'));
			var c26 = JSON.parse(localStorage.getItem('cbMS'));
			var c27 = JSON.parse(localStorage.getItem('cbSensoryProcessingDis'));
			var c28 = JSON.parse(localStorage.getItem('cbStroke'));

			if (c16 == true) {
				cbMTBI = "Mild Traumatic Brain Injury, ";
			} else {
				cbMTBI = "";
			};
			if (c17 == true) {
				cbConcussion = "Concussion, ";
			} else {
				cbConcussion = "";
			};
			if (c18 == true) {
				cbMigraine = "Migraine, ";
			} else {
				cbMigraine = "";
			};
			if (c19 == true) {
				cbEpilipsy = "Epilepsy/Tourettes, ";
			} else {
				cbEpilipsy = "";
			};
			if (c20 == true) {
				cbSpld = "Learning Disorder, ";
			} else {
				cbSpld = "";
			};
			if (c21 == true) {
				cbADHD = "ADHD, ";
			} else {
				cbADHD = "";
			};
			if (c22 == true) {
				cbASD = "ASD, ";
			} else {
				cbASD = "";
			};
			if (c23 == true) {
				cbAnxiety = "Anxiety, ";
			} else {
				cbAnxiety = "";
			};
			if (c24 == true) {
				cbChronFatigue = "Chronic Fatigue, ";
			} else {
				cbChronFatigue = "";
			};
			if (c25 == true) {
				cbVisSnow = "Visual Snow, ";
			} else {
				cbVisSnow = "";
			};
			if (c26 == true) {
				cbMS = "Multiple Sclerosis, ";
			} else {
				cbMS = "";
			};
			if (c27 == true) {
				cbSensoryProcessingDis = "Sensory Processing Disorder, ";
			} else {
				cbSensoryProcessingDis = "";
			};
			if (c28 == true) {
				cbStroke = "Stroke";
			} else {
				cbStroke = "";
			};

			sufferFromConditions = cbMTBI + cbConcussion + cbMigraine + cbEpilipsy + cbSpld + cbADHD + cbASD + cbAnxiety + cbChronFatigue + cbVisSnow + cbMS + cbSensoryProcessingDis + cbStroke




			var c29 = JSON.parse(localStorage.getItem('cbBlur'));
			var c30 = JSON.parse(localStorage.getItem('cbDouble'));
			var c31 = JSON.parse(localStorage.getItem('cbFade'));
			var c32 = JSON.parse(localStorage.getItem('cbMove'));
			var c33 = JSON.parse(localStorage.getItem('cbShake'));
			var c34 = JSON.parse(localStorage.getItem('cbShimmer'));



			if (c29 == true) {
				cbBlur = "Blur, ";
			} else {
				cbBlur = "";
			};
			if (c30 == true) {
				cbDouble = "Double, ";
			} else {
				cbDouble = "";
			};
			if (c31 == true) {
				cbFade = "Fade, ";
			} else {
				Fade = "";
			};
			if (c32 == true) {
				cbMove = "Move, ";
			} else {
				cbMove = "";
			};
			if (c33 == true) {
				cbShake = "Shake, ";
			} else {
				cbShake = "";
			};
			if (c34 == true) {
				cbShimmer = "Shimmer";
			} else {
				cbShimmer = "";
			};
			//db string
			symptomsTest = cbBlur + cbDouble + cbFade + cbMove + cbShake + cbShimmer





			var c35 = JSON.parse(localStorage.getItem('cbIsColoursY'));
			var c36 = JSON.parse(localStorage.getItem('cbIsColoursN'));
			var c37 = JSON.parse(localStorage.getItem('cbIsMovementY'));
			var c38 = JSON.parse(localStorage.getItem('cbIsMovementN'));
			var c39 = JSON.parse(localStorage.getItem('cbUncomfortableY'));
			var c40 = JSON.parse(localStorage.getItem('cbUncomfortableN'));

			if (c37 == true) {
				isMovement = "Yes";
			} else {
				isMovement = "";
			};
			if (c38 == true) {
				isMovement = "No, ";
			} else {
				isMovement = "";
			};
			if (c35 == true) {
				seeColours = "Yes";
			} else {
				seeColours = "";
			};
			if (c36 == true) {
				seeColours = "No, ";
			} else {
				seeColours = "";
			};
			if (c39 == true) {
				uncomfortable = "Yes";
			} else {
				uncomfortable = "";
			};
			if (c40 == true) {
				uncomfortable = "No, ";
			} else {
				uncomfortable = "";
			};



			//get strings
			fname = localStorage.getItem('vfname');
			lname = localStorage.getItem('vlname');
			date = localStorage.getItem('vdate');
			email = localStorage.getItem('vemail');
			phone = localStorage.getItem('vphone');
			address = localStorage.getItem('vaddress');
			city = localStorage.getItem('vcity');
			fname = localStorage.getItem('vfname');
			state = localStorage.getItem('vstate');
			fname = localStorage.getItem('vcountry');
			zip = localStorage.getItem('vzip');
			gender = localStorage.getItem('vgender');


			otherIllness = localStorage.getItem('otherillness');
			familyHistory = localStorage.getItem('familyHistory');














		};



		function save() {
			var checkbox31 = document.getElementById('defaultCheck31');
			localStorage.setItem('cbBlur', checkbox31.checked);
			var checkbox32 = document.getElementById('defaultCheck32');
			localStorage.setItem('cbDouble', checkbox32.checked);
			var checkbox33 = document.getElementById('defaultCheck33');
			localStorage.setItem('cbFade', checkbox33.checked);
			var checkbox34 = document.getElementById('defaultCheck34');
			localStorage.setItem('cbMove', checkbox34.checked);
			var checkbox35 = document.getElementById('defaultCheck35');
			localStorage.setItem('cbShake', checkbox35.checked);
			var checkbox36 = document.getElementById('defaultCheck36');
			localStorage.setItem('cbShimmer', checkbox36.checked);

			var checkbox37 = document.getElementById('defaultCheck37');
			localStorage.setItem('cbIsMovementY', checkbox37.checked);
			var checkbox38 = document.getElementById('defaultCheck38');
			localStorage.setItem('cbIsMovementN', checkbox38.checked);

			var checkbox39 = document.getElementById('defaultCheck39');
			localStorage.setItem('cbIsColoursY', checkbox39.checked);
			var checkbox40 = document.getElementById('defaultCheck40');
			localStorage.setItem('cbIsColoursN', checkbox40.checked);

			var checkbox41 = document.getElementById('defaultCheck41');
			localStorage.setItem('cbUncomfortableY', checkbox41.checked);
			var checkbox42 = document.getElementById('defaultCheck42');
			localStorage.setItem('cbUncomfortableN', checkbox42.checked);

		};
	</script>








	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>

</html>