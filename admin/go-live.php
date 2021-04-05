<?php
$page = 'Live Streaming'; 
include ('./components/header.php');
require_once "./config/auth_controller.php";
?>

    <!-- pageheader section -->
    <div class="bg-shape bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div class="pt-lg-9 pb-lg-15 pt-6 pb-10 mb-4">
                        <h1 class="h2 text-white"><?php echo $page; ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include ('./components/navbar.php'); ?>

					<!-- dashboard payment plan -->
					<div class="col-lg-9 col-md-8 col-12">
						<div class="card mb-4 ">
							<!-- card header -->
							<div class="card-header bg-white p-4 d-flex justify-content-between align-items-center">
								<h4 class="mb-0"><?php echo $page; ?></h4>
								<a href="#!" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addNewLiveStream">Add New Link</a>
                            </div>
                <!-- card body -->
                <?php
                
                  $query = "SELECT * FROM livelink order by date ASC";
                  $results = mysqli_query($conn, $query);
                  while($row = mysqli_fetch_array($results)) {
                          $id = $row['id'];
                          $youtubelink  = $row['youtubelink'];
                          $linkTitle = $row['linkTitle'];

                ?>
                <div class="card-body p-4 ">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0 pb-3 pt-0">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <img src="https://i.imgur.com/OInFTks.png" alt="" class="rounded-circle avatar-lg" />
                                    <div class="ml-3">
                                      <h5 class="mb-0"><?php echo $linkTitle;?></h5>
                                      <span class="font-12"><?php echo $email;?></span>
                                    </div>
                                </div>
                                <div>
                                    <span class="dropdown">
                                      <a class="text-muted text-decoration-none" href="#!" role="button" id="dropdownOne" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                      </a>
                                      <span class="dropdown-menu  dropdown-menu-right dropdown-menu-md-left" aria-labelledby="dropdownOne">
                                        <?php echo "<a class=\"dropdown-item\" href=\"user_detail.php?id=$id\">View</a>" ?>
                                        <a class="dropdown-item" href="#!">Delete</a>
                                      </span>
                                    </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <?php }  ?>
            </div>
					</div>
				</div>
			</div>
		</div>

<?php 
include ('./components/modal.php');
include ('./components/footer.php'); 
?>