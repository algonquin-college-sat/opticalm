<?php
  /**
   * check if user id and email exist in session
   * if they do not exist, user has not fill personal infomation
   * and redirect user to home page
   */
  session_start();
 // echo $_SESSION['user_id']." ".$_SESSION['email'];

  if(!isset($_SESSION['user_id']) || !isset($_SESSION['email']) ){
    header("Location:http://". $_SERVER['HTTP_HOST']."/opticalm");
    die();
  }else{
    echo "<script> alert('Welcome to the test, ".$_SESSION['fn']." ".$_SESSION['ln']."')</script>";
  }
  // echo $_SERVER['HTTP_HOST'];

?>

<!DOCTYPE html>


<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Visual Stress Test</title>
    <meta name="keywords" content="Free Visual Stress Test, Opticalm" />
    <meta
      name="description"
      content="Opticalm | Free Visual Stress Test"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Fonts Google -->
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
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
      <div class="navbar-text"style="background-color: #662E8D;">
        <span class="navbar-text" style="color: white;">
          <h2>Free Visual Stress Test</h2>
        </span>
      </div>
    </header>
    <div class="form-group col-12">
      <form class="col-md-6">
        <div class="form-check">
          <h6>Do you have any sensitivities to?</h6>
          <input class="form-check-input" name = "sensitivity" type="checkbox" value="Colours, " id="defaultCheck1" value="option1">
          <label class="form-check-label" for="defaultCheck1">Colours</label>
        </div>
        <div class="form-check" >
          <input class="form-check-input" name = "sensitivity" type="checkbox" value="Contrast, " id="defaultCheck2" value="option2" >
          <label class="form-check-label" for="defaultCheck2">Contrast</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" name = "sensitivity" type="checkbox" value="Flicker, " id="defaultCheck3" value="option3" >
          <label class="form-check-label" for="defaultCheck3">Flicker</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" name = "sensitivity" type="checkbox" value="Glare, " id="defaultCheck4"value="option4" >
          <label class="form-check-label" for="defaultCheck4">Glare</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" name = "sensitivity" type="checkbox" value="Light, " id="defaultCheck5" value="option5">
          <label class="form-check-label" for="defaultCheck5">Light (bright or fluoresent</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" name = "sensitivity" type="checkbox" value="Motion, " id="defaultCheck6"value="option6" >
          <label class="form-check-label" for="defaultCheck6">Motion</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" name = "sensitivity" type="checkbox" value="Patterns, " id="defaultCheck7" value="option7">
          <label class="form-check-label" for="defaultCheck7">Patterns</label>
          <h6>(choose all that apply)</h6>
        </div>
      </form>
      <form class="col-md-6">
        <div class="form-check">
            <h6>Do you have difficulties with?</h6>
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck8" value="option8">
            <label class="form-check-label" for="defaultCheck8">Attention/Concentration</label>
        </div>
        <div class="form-check" >
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck9" value="option9" >
            <label class="form-check-label" for="defaultCheck9">Balance</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck10"value="option10" >
            <label class="form-check-label" for="defaultCheck10">Cognitive Fatique</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck111"value="option11" >
            <label class="form-check-label" for="defaultCheck11">Headache</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck12" value="option12">
            <label class="form-check-label" for="defaultCheck12">Perception</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck13"value="option13" >
            <label class="form-check-label" for="defaultCheck13">Reading</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck14" value="option14">
            <label class="form-check-label" for="defaultCheck14">Tracking(when reading)</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck15" value="option15">
            <label class="form-check-label" for="defaultCheck15">Writing</label>
			
            <h6>(choose all that apply)</h6>
        </div>
      </form>
    </div>
    <form class="form-group">
      <div class="">
        <a href="index.html" class="btn btn-primary">Back</a>
        <a href="index2.html" class="btn btn-primary" onclick = "save()">Continue</a>
		
      </div>
    </form>

    <div class="footer" >
      <p>Copyright © 2021 Opticalm | Powered by Opticalm</p>
    </div>
	
	<script> 
	
	
	function save(){
	
	//Sensitivity local save
    var checkbox1 = document.getElementById('defaultCheck1');
       localStorage.setItem('cbColours', checkbox1.checked);
	var checkbox2 = document.getElementById('defaultCheck2');
       localStorage.setItem('cbContrast', checkbox2.checked);
	var checkbox3 = document.getElementById('defaultCheck3');
       localStorage.setItem('cbFlicker', checkbox3.checked);
	var checkbox4 = document.getElementById('defaultCheck4');
       localStorage.setItem('cbGlare', checkbox4.checked);
	var checkbox5 = document.getElementById('defaultCheck5');
       localStorage.setItem('cbLight', checkbox5.checked);
	var checkbox6 = document.getElementById('defaultCheck6');
       localStorage.setItem('cbMotion', checkbox6.checked);
	var checkbox7 = document.getElementById('defaultCheck7');
       localStorage.setItem('cbPatterns', checkbox7.checked);
	   
	   
	   //Difficulties local save
	var checkbox8 = document.getElementById('defaultCheck8');
       localStorage.setItem('cbAttention', checkbox8.checked);
	var checkbox9 = document.getElementById('defaultCheck9');
       localStorage.setItem('cbBalance', checkbox9.checked);
	var checkbox10 = document.getElementById('defaultCheck10');
       localStorage.setItem('cbCognitive', checkbox10.checked);
	var checkbox11 = document.getElementById('defaultCheck111');
       localStorage.setItem('cbHeadache', checkbox11.checked);
	var checkbox12 = document.getElementById('defaultCheck12');
       localStorage.setItem('cbPerception', checkbox12.checked);
	var checkbox13 = document.getElementById('defaultCheck13');
       localStorage.setItem('cbReading', checkbox13.checked);
	var checkbox14 = document.getElementById('defaultCheck14');
       localStorage.setItem('cbTracking', checkbox14.checked);
	var checkbox15 = document.getElementById('defaultCheck15');
       localStorage.setItem('cbWriting', checkbox15.checked);
	   
	   
	
	   
	
};

//if(checkbox1.checked){
	//vcolours=document.getElementById("defaultCheck1").value;
	//}else{
	//vcolours = "";
	
//	var sensitivity ="";
	//sensitivity.concat(vcolours);
	//localStorage.setItem("Sensitivities", sensitivity);

	//if(document.getElementById("defaultCheck1").checked){
//*
	//function onclickbutton(name, name1){
	//var checkBox = document.getElementById(name).value;
	
	//if(checkBox.checked==true){
	//localStorage.setItem(name1, checkBox);
	//}else{
	//localStorage.setItem(name1, "");
	//}
	//
	//function getChecks(name){
	//const checkboxes = document.querySelectorAll('input[name="sensitivity"]:checked');
	//let sensitivities = [];
	//checkboxes.forEach((checkbox) => {
    //sensitivities.push(checkbox.value);
	//};
	//return sensitivities;
//	}
	
	//});
	
	
	
	
	</script>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  </body>
</html>
