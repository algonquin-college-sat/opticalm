<?php

    /**
     * a class of user data
     */
    class User{

        public $firstname;
        public $lastname;
        public $dob;
        public $gender;
        public $email;
        public $phone;
        public $street;
        public $city;
        public $country;
        public $postCode;

        public function __construct($firstname, $lastname, $dob, $gender, $email, $phone, $street, $city, $country, $postCode){
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->dob = $dob;
            $this->gender = $gender;
            $this->email = $email;
            $this->phone = $phone;
            $this->street = $street;
            $this->city = $city;
            $this->country = $country;
            $this->postCode = $postCode;
        }

    }


?>