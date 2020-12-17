<?php
$page = 'Dashboard'; 
include ('./components/header.php');
include ('./config/auth_controller.php');
?>

    <!-- pageheader section -->
    <div class="bg-shape bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div class="pt-lg-9 pb-lg-15 pt-6 pb-10 mb-4 ">
                        <h1 class="h2 text-white"><?php echo $page;?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php include ('./components/navbar.php'); ?>

					<!-- dashboard subscriptions -->
					<div class="col-lg-9 col-md-8 col-12">
						<div class="card rounded-lg mb-4 ">
							<!-- card header -->
							<div class="card-header bg-white p-4">
								<h3 class="mb-0 h4"><?php echo $page; ?></h3>
							</div>
							<!-- card body -->
							<div class="card-body p-4 col-lg-6 col-md-6 col-12">
								<div class="bg-light-primary p-4 rounded-lg mb-4">
									<div class="d-flex justify-content-between mb-4 ">
										<div class="font-13">
											<h4 class="mb-1">Contestants</h4>
											<span>2 Clients, 250 Storage Capacity</span>
										</div>
										<div class="">
											<span class="h4"> $19.00</span
											><span class="font-13 text-muted ml-1">/ month</span>
										</div>
									</div>
									<div class="d-flex justify-content-between">
										<div class="">
											<a href="contestants" class="btn btn-primary btn-sm mr-4">View Contestants</a>
										</div>
									</div>
                                </div>
                            </div>
                            
                            <div class="card-body p-4 col-lg-6 col-md-6 col-12">
								<div class="bg-light p-4 rounded-lg">
									<div class="d-flex justify-content-between mb-4">
										<div class="font-13">
											<h4 class="mb-1">Contact Messages</h4>
											<span>1 Clients, 50 Storage Capacity</span>
										</div>
										<div class="">
											<span class="h4"> $0.00</span
											><span class="font-13 text-muted ml-1">/ month</span>
										</div>
									</div>
									<div class="d-flex justify-content-between">
										<div class="">
											<a href="messages" class="btn btn-dark btn-sm mr-4 disabled">View Messages</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php include ('./components/footer.php'); ?>