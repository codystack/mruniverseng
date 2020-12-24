<?php
session_start();
$_SESSION['message'] = '';

include ('db.php');


    $firstName  = $conn->real_escape_string($_POST['firstName']);
    $lastName   = $conn->real_escape_string($_POST['lastName']);
    $phoneNum   = $conn->real_escape_string($_POST['phoneNum']);
    $email      = $conn->real_escape_string($_POST['email']);
    $purpose    = $conn->real_escape_string($_POST['purpose']);
    $comment    = $conn->real_escape_string($_POST['comment']);


    $sql = "INSERT INTO messages (firstName, lastName, phoneNum, email, purpose, comment)"
        . "VALUES ('$firstName', '$lastName', '$phoneNum', '$email', '$purpose', '$comment')";
    
        if ($conn->query($sql) === TRUE) {
            echo "success";
          } else {
            echo "error";
          }


