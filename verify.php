<?php
session_start();
$_SESSION['error_message'] = '';

include ('./config/db.php');


//Verify user Start
if (isset($_POST['verify_btn'])) {

  $error = array();

  $fname       = $conn->real_escape_string($_POST['fname']);
  $email       = $conn->real_escape_string($_POST['email']);

      $query = "SELECT * FROM users WHERE email='$email' AND fname='$fname'";
      $results = mysqli_query($conn, $query);
      while($row = mysqli_fetch_array($results)) {
          $fname    = $row['fname'];
          $lname    = $row['lname'];
          $email    = $row['email'];
          $regno    = $row['regno'];
          $state    = $row['state'];
          $age      = $row['age'];
          $phone    = $row['phone'];
      }
      if (mysqli_num_rows($results) == 1) {
      $_SESSION['email'] = $email;
      $_SESSION['lname'] = $lname;
      $_SESSION['regno'] = $regno;
      $_SESSION['state'] = $state;
      $_SESSION['age']   = $age;
      $_SESSION['phone'] = $phone;
      $_SESSION['fname'] = $fname;
      header('location: user-detail');
      }else {
          $_SESSION['error_message'] = "Incorrect user details!";
      }
}

//User Verify End
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Verify :: Mr. Universe Nigeria&trade;</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Libs CSS -->
    <link rel="stylesheet" href="assets/libs/tiny-slider/dist/tiny-slider.css">
    <link rel="stylesheet" href="assets/libs/ion-rangeslider/css/ion.rangeSlider.min.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/theme.min.css">
    <meta property="og:url" content="https://voteonline.com.ng/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Mr. Universe Nigeria™ :: Redefining Masculinity">
    <meta property="og:description" content="Mr. Universe Nigeria Contest is organized in a macho way with outdoor activities, public presentations, fun routines and even a chance to meet to impress the ladies.">
    <meta name="keywords" content="ThankGodOkoro.codes,ThankGod Okoro,Vote Online,Mr. Universe Nigeria,Universe Nigeria,beauty pageant,software,voting,election,online contest,contest,award shows,award,shows,pageantry,digital voting,event ticket management,event voting,fashion award,headies awards,amvca,Africa Magic Viewers' Choice Awards,branding">
    <meta property="og:image" content="https://i.imgur.com/cwSjIc8.png">
    <meta name="author" content="ThankGod Okoro is a Software developer/programmer, Web + App Developer, UI/UX Designer, Brand Strategist &amp; Product/Graphic Designer.">
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://i.imgur.com/sTG7yhS.png" />
</head>

<body>

    <!-- sign up -->
    <div class="min-vh-100 d-flex align-items-center " style="background:url(https://i.imgur.com/KDDYQN5.jpg)no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6 col-12">
                    <!--<a href="\" class="mb-4 mt-5 d-flex justify-content-center"><img src="assets/images/logo.png" alt="" width="250px" /></a>-->

                    <div class="bg-dark p-4 p-lg-8 rounded-lg">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                            <h1 class="mb-2 text-white text-center">Verify Registration</h1>
                            <p class="mb-4 text-center">Enter your correct detials below to verify registration.</p>
                            <div class="alert-danger1 text-center" role="alert" id="message"><?= $_SESSION['error_message'] ?></div>
           
                            <div class="form-group">
                                <label for="email">Email Address </label>
                                <input type="email" id="email" name="email" class="form-control border-0" placeholder="Enter your email" required="" />
                            </div>

                            <div class="form-group mb-4">
                                <label for="firstName">First name </label>
                                <input type="text" id="fname" name="fname" class="form-control border-0" placeholder="Enter your first name" required="" />
                            </div>

                            <button class="btn btn-primary btn-block" name="verify_btn" type="submit">
                                Verify
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->


    <!-- Libs JS -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="../assets/libs/prismjs/prism.js"></script>
    <script src="../assets/libs/leaflet/dist/leaflet.js"></script>
    <script src="../assets/libs/moment/min/moment.min.js"></script>
    <script src="../assets/libs/lightpick/lightpick.js"></script>
    <script src="../assets/libs/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="../assets/libs/inputmask/dist/jquery.inputmask.min.js"></script>
    <script src="../assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>


    <!-- clipboard -->
    <script src="../../../cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>



    <!-- Theme JS -->
    <script src="../assets/js/theme.min.js"></script>
</body>


<!-- Mirrored from codescandy.com/coach/pages/password-reset.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Dec 2020 21:22:17 GMT -->
</html>