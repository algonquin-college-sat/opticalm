DROP DATABASE IF EXISTS cst8334;
CREATE DATABASE IF NOT EXISTS cst8334;

use cst8334;

CREATE TABLE IF NOT EXISTS users (

    user_id INT AUTO_INCREMENT,
    first_name varchar(100) NOT NULL,
    last_name varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    phone varchar(100) NOT NULL,
    first_name varchar(255) NOT NULL,
    PRIMARY KEY(user_id)
)