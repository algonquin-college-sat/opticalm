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
  <div class="footer">
    <p>Copyright © 2021 Opticalm | Powered by Opticalm</p>
  </div>






  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>

</html>
