<?php
include ('./components/header.php');
include ('./components/navbar.php');
require_once "./config/auth_controller.php";
?>
    <!-- hero section -->
    <div class="bg-cover bg-shape" style=" background-image:linear-gradient(180deg, rgba(30, 24, 53, 0.4) 0%, rgba(30, 24, 53, 0.4) 90.16%),
       url(assets/images/home-slide.jpg); ">
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6 col-md-12 col-12">
                    <div class="py-lg-15 py-12 text-white text-center">
                        <h1 class=" text-white mb-3 display-4">
                            Mr. Universe Nigeria Contestants
                        </h1>
                        <p class="mb-0 lead text-light">
                          Follow up and support your favourite contestant.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        $contestant_query = "SELECT * FROM contestants WHERE status='Active' order by date ASC";
        $result = mysqli_query($conn, $contestant_query);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $firstName = $row['firstName'];
                $lastName = $row['lastName'];
                $stateRep = $row['stateRep'];
                $picture = $row['picture'];
                $status = $row['status'];
    ?>
    <div class="pt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="text-center">
                        <img src="assets/images/contestant.jpg" alt="" class="img-fluid w-100 mb-3 rounded-lg " />
                        <h4 class="mb-0">
                          <?php echo $firstName;?> <?php echo $lastName;?>
                        </h4>
                        <span class="font-14"><?php echo $stateRep; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } } ?>
<?php include ('./components/footer.php'); ?>