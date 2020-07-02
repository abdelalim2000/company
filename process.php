<?php

/**
 * estaplish connection with database 
 * check if the connection has error
 */

require "DB.php";

session_start();

if ($conn->connect_error) {
    die("Connection Error");
}

/**
 * Adding Employee
 * cordinates to the index
 */

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $salary = $_POST['salary'];
    $jobTitle = $_POST['jobTitle'];
    $addEmployee_sql = "INSERT INTO employee_data (first_name,last_name,email,phone,address,job_title,salary) VALUES (
        '$firstName','$lastName','$email','$phone','$address','$jobTitle','$salary'
        )";
    $conn->query($addEmployee_sql);
    header("Location: index.php");
}
