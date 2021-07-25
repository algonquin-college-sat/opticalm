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
                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> <i class="fas fa-user" style="color:#662E8D ;"></i> My Account</a>
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
    </div>

    <h2 id="header">Free Visual Stress Test</h2>

    <div class="results">
        <h3>Your Free Visual Stress Test Results</h3>
    </div>

    <div class="container" >
    <?php
        session_start();

        if (!empty($_POST['symptoms'])) {
            $_SESSION['symptoms'] = implode(",",  $_POST['symptoms']);
        }

        
        echo  "<br>";
        echo  "<br>";
        echo  "<br>";
        echo "<h4> Personal Information</h4>";
        echo "Family name:   " . $_SESSION["fname"] . "<br>";
        echo "Last name:   " . $_SESSION["lname"] . "<br>";
        echo "Date of birth:   " . $_SESSION["date"] . "<br>";
        echo "Email:   " . $_SESSION["inputEmail"] . "<br>";
        echo "Address:   " . $_SESSION["inputAddress"] . "  " . $_SESSION["inputCity"] . "  ". $_SESSION["inputState"] . "  ". $_SESSION["inputCountry"] . "  ". $_SESSION["inputZip"] .  "<br>";
        echo "Gender:   " . $_SESSION["inputGender"] . "<br>";
        echo  "<br>";

        if(isset($_SESSION['sens']) && !empty($_SESSION['sens'])) {
            echo "<h4> Do you have any sensitivities to?</h4>";
            echo  $_SESSION["sens"] . "<br>";
            echo  "<br>";
        }    

        if(isset($_SESSION['dific']) && !empty($_SESSION['dific'])) {
            echo "<h4> Do you have difficulties with?</h4>";
            echo  $_SESSION["dific"] . "<br>";
            echo  "<br>";                
        }    

        if(isset($_SESSION['conditions']) && !empty($_SESSION['conditions'])) {
            echo "<h4> Do you suffer from any of the following conditions?</h4>";
            echo  $_SESSION["conditions"] . "<br>";
            echo  "<br>";                
        }    

        if(isset($_SESSION['symptoms']) && !empty($_SESSION['symptoms'])) {
            echo "<h4> Do you have sensitivities to patterns?</h4>";
            echo  $_SESSION["symptoms"] .  "<br>";
            echo  "<br>";                
        }    

    // echo "<table>";

    // foreach ($_SESSION  as $key => $value) {
    //     echo "<tr><td>";
    //     echo "$key => ";
    //     echo "$value";
    //     echo "</td></tr>";
    // }
    // echo "</table>"

    ?>
      </div>
