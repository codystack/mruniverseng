<?php
include ('./components/header.php');
include "../config/db.php";
?>
			<main class="content">
				<div class="container-fluid">

                <div class="header">
                    <br><a class="btn btn-primary" href="#" onclick="goBack()" style="background: #ffffff; color: #153D77; font-weight: 600; border-color: #153D77">Go Back</a>
                </div>

                <img src="https://i.imgur.com/XSGaWUp.png" width="200px">

                <?php
                $livelink_query = "SELECT * FROM livelink";
                $result = mysqli_query($conn, $livelink_query);
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $youtubelink = $row['youtubelink'];
                        $linkTitle = $row['linkTitle'];
                        $date = $row['date'];
                    }
                }
                ?>
					<div class="row justify-content-md-center">
						<div class="col-md-12 col-lg-8 col-xl-8 text-center">
							<div class="card-body">
                                <div class="card">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nUWf3OZTcRM?rel=0&showinfo=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <form method="get" action="archive" class="pt-2">
                                    <button class="btn btn-primary btn-lg btn-block mb-3">View Previous Episodes</button>
                                </form>
                            </div>
						</div>
                        <!--
						<div class="col-md-12 col-lg-4 col-xl-4">

                            
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Upcoming Event</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-dark">
                                                    <i class="align-middle" data-feather="calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="display-5 mt-1 mb-3">Grand Finale</h1>
                                    <div class="mb-0">
                                        27th Nov 2020 | 7:00PM (WAT)
                                    </div>

                                    <h1 class="display-5 mt-1 mb-3">Grand Finale</h1>
                                    <div class="mb-0">
                                        27th Nov 2020 | 7:00PM (WAT)
                                    </div>

                                    <h1 class="display-5 mt-1 mb-3">Grand Finale</h1>
                                    <div class="mb-0">
                                        27th Nov 2020 | 7:00PM (WAT)
                                    </div>

                                    <h1 class="display-5 mt-1 mb-3">Grand Finale</h1>
                                    <div class="mb-0">
                                        27th Nov 2020 | 7:00PM (WAT)
                                    </div>

                                </div>
                            </div>
                            <form method="get" action="archive">
                                <button class="btn btn-primary btn-lg btn-block mb-3">View Previous Events</button>
                            </form>
                        </div>
                        -->
					</div>

			</main>

<?php include ('./components/footer.php'); ?>