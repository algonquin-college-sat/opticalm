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
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
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

    <div class="container">
        <?php
        session_start();

        if (!empty($_POST['symptoms'])) {
            $_SESSION['symptoms'] = implode(",",  $_POST['symptoms']);
        }


        echo  "<br>";
        echo  "<br>";
        echo  "<br>";
        echo "<h4> Personal Information</h4>";
        echo "First name:   " . $_SESSION["fname"] . "<br>";
        echo "Last name:   " . $_SESSION["lname"] . "<br>";
        echo "Date of birth:   " . $_SESSION["date"] . "<br>";
        echo "Email:   " . $_SESSION["inputEmail"] . "<br>";
        echo "Address:   " . $_SESSION["inputAddress"] . "  " . $_SESSION["inputCity"] . "  " . $_SESSION["inputState"] . "  " . $_SESSION["inputCountry"] . "  " . $_SESSION["inputZip"] .  "<br>";
        echo "Gender:   " . $_SESSION["inputGender"] . "<br>";
        $g = $_SESSION["inputGender"];
        echo "Phone:   " . $_SESSION["inputphone"] . "<br>";

        echo  "<br>";

        if (isset($_SESSION['sens']) && !empty($_SESSION['sens'])) {
            echo "<h4> Your Sensitivites</h4>";
            echo  $_SESSION["sens"] . "<br>";
            echo  "<br>";
        }

        if (isset($_SESSION['dific']) && !empty($_SESSION['dific'])) {
            echo "<h4>Your Difficulties</h4>";
            echo  $_SESSION["dific"] . "<br>";
            echo  "<br>";
        }

        if (isset($_SESSION['conditions']) && !empty($_SESSION['conditions'])) {
            echo "<h4> Conditions</h4>";
            echo  $_SESSION["conditions"] . "<br>";
            echo  "<br>";
        }

        if (isset($_SESSION['symptoms']) && !empty($_SESSION['symptoms'])) {
            echo "<h4>Sensitivities to patterns?</h4>";
            echo  "<h6>" . $_SESSION["symptoms"] . "<h6>" .  "<br>";
            echo  "<br>";
        }

        echo "<a href='index.html' class='btn btn-primary'>Re-take The Test</a>";



        if (isset($_POST['stodatabase']) && !empty($_POST['stodatabase'])) {


            $servername = "localhost";
            $username = "cst8288";
            $password = "8288";
            $dbname = "progresearch";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $stmt = $conn->prepare("INSERT INTO tests (LastName, FirstName, 
        Address,phone,date,email,City,Country,Gender,Sensitivites,Difficulties,Conditions,SensitivitesToPattern) VALUES (?, ?, ?,?,?,?,?,?,?,?,?,?,?)");

            $stmt->bind_param(
                "sssssssssssss",
                $lname,
                $fname,
                $inputAddress,
                $inputphone,
                $date,
                $inputEmail,
                $inputCity,
                $inputCountry,
                $inputGender,
                $sens,
                $dific,
                $conditions,
                $patterns,
            );
            $lname =   $_SESSION["lname"];
            $fname = $_SESSION["fname"];
            $inputAddress = $_SESSION["inputAddress"];
            $inputphone = $_SESSION["inputphone"];
            $date =  $_SESSION["date"];
            $inputEmail =  $_SESSION["inputEmail"];
            $inputCity = $_SESSION["inputCity"];
            $inputCountry = $_SESSION["inputCountry"];
            $inputGender =  $g;
            $sens = $_SESSION['sens'];
            $dific = $_SESSION['dific'];
            $conditions = $_SESSION['conditions'];
            $patterns = $_SESSION['symptoms'];

            $stmt->execute();
        }
        ?>

    </div>