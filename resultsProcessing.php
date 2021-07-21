<?php

    /**
     * import dependencies
     */
    require_once "./User.php";
    require_once "./MySQLConnector.php";

    if( isset($_POST)){
        // echo "POST ..";
        //print_r($_POST);
        
        /**
         * get data from post request
         */
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $month = $_POST['month'];
        $day = $_POST['day'];
        $year = $_POST['year'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $street = $_POST['street'];
        $city = $_POST['city'];
        $country = $_POST['country'];
        $postCode = $_POST['postCode'];

        //$newUser = new User($firstname);
        /**
         * convert user input to php  date object
         */
        $date = new DateTime();
        $date->setDate($year, $month, $day );
        $formatDate = $date->format('Y-m-d');

        //create user object
        $newUser = new User($firstname, $lastname, $formatDate, $gender, $email, $phone, $street, $city, $country, $postCode );
        //print_r($newUser);
        //echo "<br>";
        // initialize mysql connector
        $conn = new MySQLConnector('localhost','root','','opticalm_backend','3307');

        //opt2, abc def
        // $conn = new MySQLConnector('localhost','abc','def','opt2','3306')

        //save user to db
        $affectedRow = $conn->insertUser($newUser);

        // if saved successfully, one row will affected ( one row is inserted)
        if( $affectedRow == 1){
            //show alert dialogue box
            echo "<script> alert('Welcome to the test, ". $firstname."')</script>";
        }

    }else{
        echo "404";
    }

?>