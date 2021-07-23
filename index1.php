<?php
print_r($_POST);
session_start();

$_SESSION['POST'] = $_POST; #Copy _POST to _SESSION
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Free Visual Stress Test</title>
  <meta name="keywords" content="Free Visual Stress Test, Opticalm" />
  <meta name="description" content="Opticalm | Free Visual Stress Test" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
  <!-- Fonts Google -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
  <link rel="stylesheet" href="css/global.css" />
  <link rel="stylesheet" href="css/main.css" />
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
            <img src="assets/logo.png" alt="Visual Stress Solution" weight="70px" height="70px" />
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
          <i class="fas fa-user" style="color: #662e8d"></i>
          <li class="nav-item dropdown">
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
    <h2 id="header">Free Visual Stress Test</h2>
  </header>
  <div class="form-group col-12">
    <form class="col-md-6" action="index2.php" method="POST">
      <div class="form-check">
        <h6>Do you have any sensitivities to?</h6>
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" value="option1" />
        <label class="form-check-label" for="defaultCheck1">Colours</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" value="option2" />
        <label class="form-check-label" for="defaultCheck2">Contrast</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" value="option3" />
        <label class="form-check-label" for="defaultCheck3">Flicker</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck4" value="option4" />
        <label class="form-check-label" for="defaultCheck4">Glare</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck5" value="option5" />
        <label class="form-check-label" for="defaultCheck5">Light (bright or fluoresent</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck6" value="option6" />
        <label class="form-check-label" for="defaultCheck6">Motion</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck7" value="option7" />
        <label class="form-check-label" for="defaultCheck7">Patterns</label>
        <h6>(choose all that apply)</h6>
      </div>

      <div class="form-check">
        <h6>Do you have difficulties with?</h6>
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck8" value="option8" />
        <label class="form-check-label" for="defaultCheck8">Attention/Concentration</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck9" value="option9" />
        <label class="form-check-label" for="defaultCheck9">Balance</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck10" value="option10" />
        <label class="form-check-label" for="defaultCheck10">Cognitive Fatique</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck111" value="option11" />
        <label class="form-check-label" for="defaultCheck11">Headache</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck12" value="option12" />
        <label class="form-check-label" for="defaultCheck12">Perception</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck13" value="option13" />
        <label class="form-check-label" for="defaultCheck13">Reading</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck14" value="option14" />
        <label class="form-check-label" for="defaultCheck14">Tracking(when reading)</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck15" value="option15" />
        <label class="form-check-label" for="defaultCheck15">Writing</label>
        <h6>(choose all that apply)</h6>
      </div>
      <div class="col-md-12">
        <a href="#" class="btn btn-primary">Back</a>
        <button type="submit" value="Continue" class="btn btn-primary">
          Contine
        </button>
      </div>
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
