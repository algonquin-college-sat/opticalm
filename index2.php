<?php
session_start();

if (!empty($_POST['sensitivites'])) {
  $_SESSION['sens'] = implode(",",  $_POST['sensitivites']);
}

if (!empty($_POST['difficulties'])) {
  $_SESSION['dific'] = implode(",",  $_POST['difficulties']);
}

?>
<!DOCTYPE html>
<html lang="en">

<?php include 'header.php';?>

  <div class="form-group">
    <form class="col-12" action="index3.php" method="POST">
      <div class="form-check">
        <h6>Do you suffer from any of the following conditions?</h6>
        <input class="form-check-input" type="checkbox" id="defaultCheck16" value="mTBI" name="conditions[]">
        <label class="form-check-label" for="defaultCheck16">mTBI (Mild traumatic brain injury)</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="defaultCheck17" value="Concussion" name="conditions[]">
        <label class="form-check-label" for="defaultCheck17">Concussion</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="defaultCheck18" value="Migraine" name="conditions[]">
        <label class="form-check-label" for="defaultCheck18">Migraine</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="defaultCheck19" value="Epilepsy" name="conditions[]">
        <label class="form-check-label" for="defaultCheck19">Epilepsy/Tourettes</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="defaultCheck20" value="SpLD" name="conditions[]">
        <label class="form-check-label" for="defaultCheck20">SpLD(Spesific Learnig Difficulty</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="defaultCheck21" value="AD/HD" name="conditions[]">
        <label class="form-check-label" for="defaultCheck21">AD/HD</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="defaultCheck22" value="ASD" name="conditions[]">
        <label class="form-check-label" for="defaultCheck22">ASD</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="defaultCheck23" value="Anxiety" name="conditions[]">
        <label class="form-check-label" for="defaultCheck23">Anxiety</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="defaultCheck24" value="Chronic Fatigue" name="conditions[]">
        <label class="form-check-label" for="defaultCheck24">Chronic Fatigue</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="defaultCheck25" value="Visual Snow" name="conditions[]">
        <label class="form-check-label" for="defaultCheck25">Visual Snow</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="defaultCheck26" value="Multiple Sclerosis" name="conditions[]">
        <label class="form-check-label" for="defaultCheck26">Multiple Sclerosis</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="defaultCheck27" value="Sensory Processing disorder (visual)" name="conditions[]">
        <label class="form-check-label" for="defaultCheck27">Sensory Processing disorder (visual)</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="defaultCheck28" value="Stroke" name="conditions[]">
        <label class="form-check-label" for="defaultCheck28">Stroke</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="defaultCheck29" value="option29">
        <label class="form-check-label" for="defaultCheck29">Other Neurological or Neurodevelopmental Diagnosis (please fill up information below)</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="defaultCheck30" value="option30">
        <label class="form-check-label" for="defaultCheck30">Family History of (please fill up information below)</label>
        <h6>(choose all that apply)</h6>
      </div>
      <br></br>
      <div class="col-12">
        <label for="illness">
          <h6>Other Neurological or Neurodevelopmental Diagnosis</h6>
        </label>
        <input type="text" class="form-control" id="illness" placeholder="" name="conditions[]">
      </div>
      <br></br>
      <div class="col-12">
        <label for="family_history">
          <h6>Family History of</h6>
        </label>
        <input type="text" class="form-control" id="family_history" placeholder="" name="conditions[]">
      </div>
      <br></br>
      <a href="index2.php" class="btn btn-primary">Back</a>
      <button type="submit" value="Continue" class="btn btn-primary">
        Continue
      </button>
    </form>
  </div>

  <?php include 'footer.php'; ?>

</html>
