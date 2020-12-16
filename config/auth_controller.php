<?php
session_start();
$_SESSION['message'] = '';

$conn = new mysqli('localhost', 'root', 'Webify2020!!', 'mruniverseng');


    $firstName  = $conn->real_escape_string($_POST['firstName']);
    $lastName   = $conn->real_escape_string($_POST['lastName']);
    $phoneNum   = $conn->real_escape_string($_POST['phoneNum']);
    $email      = $conn->real_escape_string($_POST['email']);
    $purpose    = $conn->real_escape_string($_POST['purpose']);


    $sql = "INSERT INTO messages (firstName, lastName, phoneNum, email, purpose)"
        . "VALUES ('$firstName', '$lastName', '$phoneNum', '$email', '$purpose')";
    
        if ($conn->query($sql) === TRUE) {
            echo "success";
          } else {
            echo "error";
          }


    