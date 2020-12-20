<?php
session_start();
include ('./config/db.php');
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['email']);
  header("location: about");
}
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>Mr. Universe Nigeria&trade; :: Redefining Masculinity</title>
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


    <!-- header -->
    <div class="header position-sticky border-top-3 border-top border-primary bg-dark">
        
    </div>
    <!-- pageheader section -->
    <div class="bg-shape bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div class="pt-lg-9 pb-lg-15 pt-6 pb-10 mb-4 ">
                        <h1 class="h2 text-white"><?php echo $_SESSION['fname'] ?>'s Details</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- dashboard nav -->
    <div class="pb-12 mt-lg-n14 mt-n9">
        <div class="container">
            <div class="row">
					<!-- dashboard nav -->
					<div class="col-lg-12 col-md-8 col-12">
						<div class="card rounded-lg mb-4 ">
							<!-- card body -->
							<div class="card-body p-4">
								<div
									class="d-lg-flex align-items-center justify-content-between"
								>
            </div>

            <div>
                <!-- form -->
                <form class="form-row text-center">
                    <div class="col-12 col-md-12">
                        <h4 class="mb-2">Full Name</h4>
                        <label class="font-20 text-dark" for="fname" style="font-size: strong;"><?php echo $_SESSION['fname'] ?> <?php echo $_SESSION['lname'] ?></span></label>
                    </div>

                    <div class="col-12 col-md-12">
                        <h4 class="mb-2">Email</h4>
                        <label class="font-20 text-dark" for="fname" style="font-size: strong;"><?php echo $_SESSION['email'] ?></span></label>
                    </div>

                    <div class="col-12 col-md-12">
                        <h4 class="mb-2">Registration Number</h4>
                        <label class="font-20 text-dark" for="fname" style="font-size: strong;"><?php echo $_SESSION['regno'] ?></span></label>
                    </div>

                    <div class="col-12 col-md-12">
                        <h4 class="mb-2">State of Residence</h4>
                        <label class="font-20 text-dark" for="fname" style="font-size: strong;"><?php echo $_SESSION['state'] ?></span></label>
                    </div>

                    <div class="col-12 col-md-12">
                        <h4 class="mb-2">Age</h4>
                        <label class="font-20 text-dark" for="fname" style="font-size: strong;"><?php echo $_SESSION['age'] ?></span></label>
                    </div>

                    <div class="col-12 col-md-12">
                        <h4 class="mb-2">Phone Number</h4>
                        <label class="font-20 text-dark" for="fname" style="font-size: strong;"><?php echo $_SESSION['phone'] ?></span></label>
                    </div>

                    <div class="col-12">
                        <a href="logout" class="btn btn-primary" type="submit">
												Close
											</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <!-- Libs JS -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="assets/libs/prismjs/prism.js"></script>
    <script src="assets/libs/leaflet/dist/leaflet.js"></script>
    <script src="assets/libs/moment/min/moment.min.js"></script>
    <script src="assets/libs/lightpick/lightpick.js"></script>
    <script src="assets/libs/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="assets/libs/inputmask/dist/jquery.inputmask.min.js"></script>
    <script src="assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>

    <!-- clipboard -->
    <script src="assets/js/clipboard.min.js"></script>


    <!-- Theme JS -->
    <script src="assets/js/theme.min.js"></script>


</body>


</html>