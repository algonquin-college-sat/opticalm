<?php

    // /**
    //  * import dependencies
    //  */
    // require_once "./User.php";
    // require_once "./MySQLConnector.php";

    // if( isset($_POST)){
    //     // echo "POST ..";
    //     //print_r($_POST);

    //     /**
    //      * get data from post request
    //      */
    //     $firstname = $_POST['fname'];
    //     $lastname = $_POST['lname'];
    //     // $month = $_POST['month'];
    //     // $day = $_POST['day'];
    //     // $year = $_POST['year'];
    //     $dob = $_POST['date'];
    //     $gender = $_POST['inputGender'];
    //     $email = $_POST['inputEmail4'];
    //     $phone = $_POST['inputphone'];
    //     $street = $_POST['inputAddress'];
    //     $city = $_POST['inputCity'];
    //     $province = $_POST['inputState'];
    //     $postCode = $_POST['inputZip'];
    //     echo $postCode."<br>";

    //     //$newUser = new User($firstname);
    //     /**
    //      * convert user input to php date object
    //      */
    //     // $date = new DateTime();
    //     // $date->setDate($year, $month, $day );
    //     // $formatDate = $date->format('Y-m-d');

    //     //create user object
    //     $newUser = new User($firstname, $lastname, $dob, $gender, $email, $phone, $street, $city, $province, $postCode );
    //     //print_r($newUser);
    //     //print_r($newUser);
    //     //echo "<br>";
    //     // initialize mysql connector
    //     //$conn = new MySQLConnector('localhost','root','','cst8334','3307');
    //     $conn = new MySQLConnector('localhost', 'opticalm', 'strongpassword', 'cst8334', '3307');

    //     //opt2, abc def
    //     // $conn = new MySQLConnector('localhost','abc','def','opt2','3306')

    //     //save user to db
    //     $returnUser = $conn->insertUser($newUser);

    //     //print_r($returnUser);

    //     // if saved successfully, one row will affected ( one row is inserted)
    //     if( $returnUser != null){
    //         //show alert dialogue box
    //         // echo "<script> alert('Welcome to the test, ". $returnUser->firstname."')</script>";
    //         session_start();
    //         $_SESSION['user_id'] = $returnUser->user_id;
    //         $_SESSION['email'] = $returnUser->email;
    //         $_SESSION['fn'] = $returnUser->firstname;
    //         $_SESSION['ln'] = $returnUser->lastname;
    //         header("Location:http://". $_SERVER['HTTP_HOST']."/opticalm/index1.php");
    //     }

    // }else{
    //     echo "404";
    // }
