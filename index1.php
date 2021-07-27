<?php

/**
 * check if user id and email exist in session
 * if they do not exist, user has not fill personal infomation
 * and redirect user to home page
 */
// echo $_SESSION['user_id']." ".$_SESSION['email'];

// if (!isset($_SESSION['user_id']) || !isset($_SESSION['email'])) {
//   header("Location:http://" . $_SERVER['HTTP_HOST'] . "/opticalm");
//   die();
// } else {
//   echo "<script> alert('Welcome to the test, " . $_SESSION['fn'] . " " . $_SESSION['ln'] . "')</script>";
// }
// if (isset($_POST)) {
//   $_SESSION['POST'] = $_POST; #Copy _POST to _SESSION
// }
session_start();

$_SESSION['fname'] = $_POST['fname'];
$_SESSION['date'] = $_POST['date'];
$_SESSION['lname'] = $_POST['lname'];
$_SESSION['inputEmail'] = $_POST['inputEmail'];
$_SESSION['inputAddress'] = $_POST['inputAddress'];
$_SESSION['inputCity'] = $_POST['inputCity'];
$_SESSION['inputState'] = $_POST['inputState'];
$_SESSION['inputCountry'] = $_POST['inputCountry'];
$_SESSION['inputZip'] = $_POST['inputZip'];
$_SESSION['inputGender'] = $_POST['inputGender'];
$_SESSION['inputphone'] = $_POST['inputphone'];




?>

<!DOCTYPE html>
<html lang="en">

<?php include 'header.php';?>

  <div class="form-group col-12">
    <form class="col-md-6" action="index2.php" method="POST">
      <div class="form-check">

        <h6>Do you have any sensitivities to?</h6>
        <input class="form-check-input" type="checkbox" value="Colours" id="defaultCheck1" name="sensitivites[]" />
        <label class="form-check-label" for="defaultCheck1">Colours</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Contrast" id="defaultCheck2" name="sensitivites[]" />
        <label class="form-check-label" for="defaultCheck2">Contrast</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Flicker" id="defaultCheck3" name="sensitivites[]" />
        <label class="form-check-label" for="defaultCheck3">Flicker</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Glare" id="defaultCheck4" name="sensitivites[]" />
        <label class="form-check-label" for="defaultCheck4">Glare</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Light" id="defaultCheck5" name="sensitivites[]" />
     <label class="form-check-label" for="defaultCheck5">Light (bright or fluoresent)</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Motion" id="defaultCheck6" name="sensitivites[]" />
        <label class="form-check-label" for="defaultCheck6">Motion</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Patterns" id="defaultCheck7" name="sensitivites[]" />
        <label class="form-check-label" for="defaultCheck7">Patterns</label>
        <h6>(choose all that apply)</h6>
      </div>

      <div class="form-check">
        <h6>Do you have difficulties with?</h6>
        <input class="form-check-input" type="checkbox" value="Attention/Concentration" id="defaultCheck8" name="difficulties[]" />
        <label class="form-check-label" for="defaultCheck8">Attention/Concentration</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Balance" id="defaultCheck9" name="difficulties[]" />
        <label class="form-check-label" for="defaultCheck9">Balance</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Cognitive Fatique" id="defaultCheck10" name="difficulties[]" />
        <label class="form-check-label" for="defaultCheck10">Cognitive Fatique</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Headache" id="defaultCheck111" name="difficulties[]" />
        <label class="form-check-label" for="defaultCheck11">Headache</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Perception" id="defaultCheck12" name="difficulties[]" />
        <label class="form-check-label" for="defaultCheck12">Perception</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Reading<" id="defaultCheck13" name="difficulties[]" />
        <label class="form-check-label" for="defaultCheck13">Reading</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Tracking" id="defaultCheck14" name="difficulties[]" />
        <label class="form-check-label" for="defaultCheck14">Tracking(when reading)</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Writing" id="defaultCheck15" name="difficulties[]" />
        <label class="form-check-label" for="defaultCheck15">Writing</label>
        <h6>(choose all that apply)</h6>
      </div>
      <div class="col-md-12">
        <a href="#" class="btn btn-primary">Back</a>
        <button type="submit" value="Continue" class="btn btn-primary">
          Continue
        </button>
      </div>
    </form>
  </div>

  <?php include 'footer.php'; ?>

</html>
