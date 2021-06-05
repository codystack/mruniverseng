<?php
include ('./components/header.php');
?>
			<main class="content">
				<div class="container-fluid">

                <div class="header">
                    <br><a class="btn btn-primary" href="#" onclick="goBack()" style="background: #ffffff; color: #153D77; font-weight: 600; border-color: #153D77">Go Back</a>
                </div>

                <img src="https://i.imgur.com/XSGaWUp.png" width="200px">

					<div class="row justify-content-md-center">
						<div class="col-md-12 col-lg-8 col-xl-8 text-center">
							<div class="card-body">
                                <div class="card">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mKEIZ4DwnP8?rel=0&showinfo=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <form method="get" action="archive" class="pt-2">
                                    <button class="btn btn-primary btn-lg btn-block mb-3">View Previous Episodes</button>
                                </form>
                            </div>
						</div>
					</div>

			</main>

<?php include ('./components/footer.php'); ?>