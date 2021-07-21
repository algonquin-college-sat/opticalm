<?php

    /**
     *  define a class for connecting database
     */
    class MySQLConnector{

        private $mysqli;

        /**
         * constructor
         */
        public function __construct($host, $username, $password, $dbname, $port){

            $this->mysqli = new mysqli($host, $username, $password, $dbname, $port);

        }

        /**
         * get connection
         */
        public function getConnection(){

            if ($mysqli -> connect_errno) {
                echo "Failed to connect to MySQL: " . $mysqli -> connect_errno;
                exit();
              }
            return $mysqli;

        }

        /**
         * method for inserting user data
         */
        public function insertUser($user){

            //create a prepare statement for insert ( pre -compile sql command for insertion)
            $stmt = $this->mysqli->prepare("INSERT INTO user (firstname, lastname,dob,gender, email, phone, street, city, country, postal_code )
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            // add parameters to prepared statement
            $stmt->bind_param
                    ("ssssssssss", $user->firstname, $user->lastname, $user->dob,  $user->gender, $user->email, $user->phone
                    , $user->street, $user->city, $user->country, $user->postCode );
            
            //print_r($stmt);

            $stmt->execute();

            //print_r($stmt);
            // return how many rows are affected, should be one if insert sucessfully
            return $stmt->affected_rows;

        }

       // public function readUser() ..
       // public function insertQuestion() ..

    }

?>