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


// view Data

$dataView_sql = "SELECT * FROM employee_data";

$data = $conn->query($dataView_sql);

//Delete the data

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete_sql = "DELETE FROM employee_data WHERE id=$id";

    $conn->query($delete_sql);

    header("Location: index.php");
}

//update Data

if (isset($_GET['update'])) {
    $id = $_GET['update'];
    $dataUpdateView_sql = "SELECT * FROM employee_data WHERE id=$id";
    $data = $conn->query($dataUpdateView_sql);
}

#edit DATA
if (isset($_POST['edit'])) {
    if (isset($_GET['update'])) {
        $id = $_GET['id'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $salary = $_POST['salary'];
        $jobTitle = $_POST['jobTitle'];
        $editEmployee_sql = "UPDATE `employee_data` SET `first_name` = '$firstName',
            `last_name` = '$lastName',
            `email` = '$email',
            `phone` = '$phone',
            `address` = '$address',
            `job_title` = '$jobTitle',
            `salary` = '$salary' WHERE `id` = '$id'";
        $conn->query($editEmployee_sql);
    }
    header('Location: index.php');
}
