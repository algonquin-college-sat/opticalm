
DROP DATABASE IF EXISTS cst8334;
CREATE DATABASE IF NOT EXISTS cst8334;

/* use database cst8334*/
use cst8334;

/**
* sql command for generating table
*/
CREATE TABLE IF NOT EXISTS users (

    user_id INT AUTO_INCREMENT,
    firstname varchar(100) NOT NULL,
    lastname varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    dob varchar(100) NOT NULL,
    phone varchar(100) NOT NULL,
    street varchar(255) NOT NULL,
    city varchar(255) NOT NULL,
    province varchar(255) NOT NULL,
    country varchar(255) DEFAULT 'Canada' ,
    postal_code varchar(10) NOT NULL,
    gender varchar(10) NOT NULL,
    test_id varchar(10) NOT NULL,
    PRIMARY KEY(user_id)
)