<?php
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
          $_SESSION['success_message'] = "Contestants added 👍";
      }
      else {
          $error=$conn->error;
          $_SESSION['message_title'] = "Error Occurred";
          $_SESSION['message'] = $error;
      }
  }
}

