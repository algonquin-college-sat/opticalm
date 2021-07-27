<?php
session_start();
if (!empty($_POST['conditions'])) {

	$_SESSION['conditions'] = implode(",",  $_POST['conditions']);
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'header.php';?>


	<div class="form-group">
		<form class="col-12" action="index4.php" method="POST">
			<h6>Do you have sensitivities to patterns?</h6>
			<span>Please concentrate for a minute on a densely printed black and white page of text.</span>
			<span>Then answer these questions:</span>
			<div class="form-check">
				<br>
				<br>
				<h6 style="background-color: black;color: white;padding: 10px;">
					He went back to the video to see what had been recorded and was shocked at what he saw.
					The opportunity of a lifetime passed before him as he tried to decide between a cone or a cup.
					You've been eyeing me all day and waiting for your move like a lion stalking a gazelle in a savannah.
					The rusty nail stood erect, angled at a 45-degree angle, just waiting for the perfect barefoot to come along.
					He had concluded that pigs must be able to fly in Hog Heaven.
					He was disappointed when he found the beach to be so sandy and the sun so sunny.
					I may struggle with geography, but I'm sure I'm somewhere around here.
					He figured a few sticks of dynamite were easier than a fishing pole to catch fish.</h6>

			</div>
			<br></br>
			<h6>1) Do you see any of the following in the words or letters?</h6>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck31" value="Text Blurty" name="symptoms[]">
				<label class="form-check-label" for="defaultCheck31">Blur</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck32" value="Double Text" name="symptoms[]">
				<label class="form-check-label" for="defaultCheck32">Double</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck33" value="Text Faded" name="symptoms[]">
				<label class="form-check-label" for="defaultCheck33">Fade</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck34" value="Text Moving" name="symptoms[]">
				<label class="form-check-label" for="defaultCheck34">Move</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck35" value="Text Shaking" name="symptoms[]">
				<label class="form-check-label" for="defaultCheck35">Shake</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck36" value="Text Shimmering" name="symptoms[]">
				<label class="form-check-label" for="defaultCheck36">Shimmer</label>
				<h6>(choose all that apply)</h6>
			</div>
			<br></br>
			<h6>2) Is there any movement on the page or behind the text?</h6>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck37" value="Movement Behind Text" name="symptoms[]">
				<label class="form-check-label" for="defaultCheck37">Yes</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck38" value="No Movement Behind Text" name="symptoms[]">
				<label class="form-check-label" for="defaultCheck38">No</label>
			</div>
			<br></br>
			<h6>3) Do you see colours or lights on the page?</h6>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck39" value="Color or Lights On Page" name="symptoms[]">
				<label class="form-check-label" for="defaultCheck39">Yes</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck40" value="No Color or Lights On Page" name="symptoms[]">
				<label class="form-check-label" for="defaultCheck40">No</label>
			</div>
			<br></br>
			<h6>4) Is the page uncomfortable to look at?</h6>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck41" value="Uncomfortable to Look at" name="symptoms[]">
				<label class="form-check-label" for="defaultCheck41">Yes</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="defaultCheck42" value="Not Uncomfortable to Look at" name="symptoms[]">
				<label class="form-check-label" for="defaultCheck42">No</label>

			</div>
			<a href="index2.php" class="btn btn-primary">Back</a>
			<button type="submit" name="stodatabase" value="Continue" class="btn btn-primary">
				Submit Form
			</button>
		</form>
	</div>

	<?php include 'footer.php'; ?>
</html>