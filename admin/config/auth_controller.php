<?php
session_start();
$_SESSION['error_message'] = '';

include ('db.php');


//Login Admin Start
if (isset($_POST['login_btn'])) {

  $error = array();

  $username       = $conn->real_escape_string($_POST['username']);
  $password       = $conn->real_escape_string($_POST['password']);
  $email          = $conn->real_escape_string($_POST['email']);

  if (count($error) == 0) {
      $password = sha1($password);
      $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
      $results = mysqli_query($conn, $query);
      while($row = mysqli_fetch_array($results)) {
          $fullname = $row['fullname'];
          $email    = $row['email'];
      }
      if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['fullname'] = $fullname;
      header('location: dashboard');
      }else {
          $_SESSION['error_message'] = "Incorrect login details!";
      }
  }
}
//Login Admin End


//Add Streaming Link Query
if (isset($_POST['addNewLink_btn'])) {

    $youtubelink = $conn->real_escape_string($_POST['youtubelink']);
    $linkTitle = $conn->real_escape_string($_POST['linkTitle']);

    $query = "INSERT INTO livelink (youtubelink, linkTitle) 
  			        VALUES('$youtubelink', '$linkTitle')";
    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['success_message_title'] = "Show Added";
        $_SESSION['success_message'] = "You're Live Now!";
    }else {
        $_SESSION['message_title'] = "Agent Already Exist!";
        $_SESSION['message'] = "Modify or Delete user details";
    }
}


//Add Contestants
if (isset($_POST['add_contestant_btn'])) {

    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $stateRep = $conn->real_escape_string($_POST['stateRep']);
    $picture_path = $conn->real_escape_string('../upload/'.$_FILES['picture']['name']);

    if (file_exists($picture_path)) 
	{
    $picture_path = $conn->real_escape_string('../upload/'.uniqid().rand().$_FILES['picture']['name']);
    }

    $checker = 0;

    //make sure file type is image
    if (preg_match("!image!", $_FILES['picture']['type'])) {
        $checker ++;
    }
    if ($checker < 1){
        exit;
    }

    $user_check_query = "SELECT * FROM contestants WHERE stateRep='$stateRep' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) { // if user exists
        if ($user['stateRep'] === $stateRep) {
            $_SESSION['message_title'] = "User already exist!";
            $_SESSION['message'] = "Not good Chief!";
        }
    }else {

        $query = "INSERT INTO contestants (firstName, lastName, stateRep, status, picture)"
        . "VALUES ('$firstName', '$lastName', '$stateRep', 'Active', '$picture_path')";

        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {

            //copy image to upload folder
            copy($_FILES['picture']['tmp_name'], $picture_path);

            $_SESSION['success_message_title'] = "Nice one Chief!";
            $_SESSION['success_message'] = "Contestant added 👍";
        }
        else {
            $error=$conn->error;
            $_SESSION['message_title'] = "Error Occurred";
            $_SESSION['message'] = $error;
        }
    }
}