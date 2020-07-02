<?php
$serverName = "localhost";
$username = "mohamed";
$password = "01026";
$dataBase_Name = "company";

$conn = new mysqli($serverName, $username, $password, $dataBase_Name);


//for database Createion

/* $sql = "CREATE DATABASE company";

$table = "CREATE TABLE employee_data(
    id INT(10) PRIMARY NOT NULL AUTO_INCREMENT,
    first_name TEXT(25) NOT NULL,
    last_name TEXT(25) NOT NULL,
    email VARCHAR(125) NOT NULL,
    phone VARCHAR(25) NOT NULL,
    address VARCHAR(255) NOT NULL,
    job_title text(30) NOT NULL,
    salary FLOAT NOT NULL
)"; */
