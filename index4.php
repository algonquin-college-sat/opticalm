<!DOCTYPE html>


<html lang="en">

<?php include 'header.php';?>

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
    <?php include 'footer.php'; ?>
</html>
