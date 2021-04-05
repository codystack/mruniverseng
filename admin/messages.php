<?php
$page = 'Messages'; 
include ('./components/header.php');
include ('./config/auth_controller.php');
?>

    <!-- pageheader section -->
    <div class="bg-shape bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div class="pt-lg-9 pb-lg-15 pt-6 pb-10 mb-4 ">
                        <h1 class="h2 text-white"><?php echo $page; ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include ('./components/navbar.php'); ?>

					<!-- dahboard payment method -->
					<div class="col-lg-9 col-md-8 col-12">
						<div class="card rounded-lg mb-4 ">
							<!-- card header -->
							<div class="card-header bg-white p-4 border-bottom-0">
								<h3 class="mb-0 h4"><?php echo $page ?></h3>
              </div>
              
                <!-- Messages Table Start -->
                <div class="table-responsive border-0">
                    <div class="card-body">
                        <table id="datatables-basic" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Full Name</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $message_query = "SELECT * FROM messages order by date ASC";
                                $result = mysqli_query($conn, $message_query);
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                        $firstName = $row['firstName'];
                                        $lastName = $row['lastName'];
                                        $phoneNum = $row['phoneNum'];
                                        $email = $row['email'];
                                        $purpose = $row['purpose'];
                                        $date = $row['date'];

                                echo "<tr>";
                                    echo "<td>" .$id. "</td>";
                                    echo "<td>" .$firstName. "  " .$lastName. "</td>";
                                    echo "<td>" .$phoneNum. "</td>";
                                    echo "<td>" .date("d(D) M Y", strtotime($date)). "</td>";
                                    echo "<td class=\"text-right\">"
                                    ."<button class=\"btn btn-primary messageinfo btn-sm\" data-id='".$id."'><i class='far fa-eye'></i> View</button>".
                                    "</td>";
                                "</tr>";
                                    }
                                }else {
                                    echo "<td><p>No Request Yet!</p></td>";
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
                                    <th>Full Name</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
              </div>
              <!-- Messages Table End -->

            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- Message Modal -->
    <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="messageModal">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Contact Messages</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body m-3">

                </div>
                <!--
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Close</button>
                </div>
                -->
            </div>
        </div>
    </div>
<?php include ('./components/footer.php'); ?>