<?php
$page = 'Contestants'; 
include ('./components/header.php');
require_once ('./config/auth_controller.php');
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

					
					<!-- dashboard user -->
					<div class="col-lg-9 col-md-8 col-12">
						<div class="card rounded-lg mb-4 ">
							<!-- card header -->
							<div class="card-header bg-white p-4 border-bottom-0 d-flex justify-content-between align-items-center">
								<h3 class="mb-0 h4"><?php echo $page; ?></h3>
								<a href="#!" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addNewContestant">Add New</a>
							</div>
							<!-- table -->

							<div class="table-responsive border-0">
                                <div class="card-body">
                                    <table id="datatables-basic" class="table table-striped" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Contestant Name</th>
                                                <th>State Representing</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
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

                                            echo "<tr>";
                                                echo "<td class=\"align-middle align-items-center\">" .$id. "</td>";
                                                echo "<td class=\"align-middle d-flex align-items-center p-3\">" 
                                                ."<img src='".$picture."' class='rounded-circle avatar-lg'/>
												<div class=\"ml-3\">
												<h5 class=\"mb-0\"> ".$firstName." ".$lastName."</h5>
												</div>".
                                                "</td>";
                                                echo "<td class=\"align-middle align-items-center\">"
                                                ."<h5 class=\"mb-0\"> ".$stateRep." </h5>". 
                                                "</td>";
                                                echo "<td class=\"align-middle align-items-center text-right\">"
                                                ."<button class=\"btn btn-primary messageinfo btn-sm\" data-id='".$id."'><i class='far fa-eye'></i> View</button>".
                                                "</td>";
                                            "</tr>";
                                                }
                                            }else {
                                                echo "<td><p>No Contestant Yet!</p></td>";
                                            }
                                            if (isset($_GET['deleteid'])){
                                                $del_selected = mysqli_query($con, "DELETE FROM userss WHERE id = '".$_GET['deleteid']."'");
                                                mysqli_query($con,"ALTER TABLE users AUTO_INCREMENT = 1");
                                                echo "<meta http-equiv=\"refresh\" content=\"0;URL=contestants\">";
                                                exit();
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Contestant Name</th>
                                                <th>State Representing</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php 
include ('./components/modal.php');
include ('./components/footer.php'); 
?>