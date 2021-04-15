<!-- footer -->
<div class="footer pb-3 bg-dark text-base">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="mt-8">
                        <!-- social media -->
                    <div class="row">
                        <div class="offset-lg-3 col-lg-6 col-md-12 col-12">
                            <div class="text-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="https://www.facebook.com/Mruniversenigeria" target="_blank" class="social-btn sb-facebook sb-round btn-light "><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://twitter.com/MrUniverseNig" target="_blank" class="social-btn sb-twitter sb-round btn-light "><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.youtube.com/user/MRUNIVERSENIGERIA" target="_blank" class="social-btn sb-youtube sb-round btn-light "><i class="fab fa-youtube"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.instagram.com/mruniversenigeria" target="_blank" class="social-btn sb-instagram sb-round btn-light "><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                        <ul class="list-inline">
                            <li class="list-inline-item">© <script>document.write(new Date().getFullYear());</script> Mr. Universe Nigeria.  All Rights Reserved.<br>Built by <a href="https://www.thankgodokoro.codes" target="_blank">TeeGee</a></li>
                        </ul>
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
    <script src="../../cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>

    <!-- Theme JS -->
    <script src="../assets/js/theme.min.js"></script>
    <script src="../assets/js/dataTables.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>

    <?php
    if (isset($_SESSION['message']))
    {
        ?>
        <script>
            swal({
                title: "<?php echo $_SESSION['message_title']; ?>",
                text: "<?php echo $_SESSION['message']; ?>",
                icon: "error",
                buttons: false,
                timer: 4000
            });
        </script>
        <?php
        unset($_SESSION['message']);
    }
    ?>

    <?php
    if (isset($_SESSION['success_message']))
    {
        ?>
        <script>
            swal({
                title: "<?php echo $_SESSION['success_message_title']; ?>",
                text: "<?php echo $_SESSION['success_message']; ?>",
                icon: "success",
                buttons: false,
                timer: 4000
            });
        </script>
        <?php
        unset($_SESSION['success_message']);
    }
    ?>

    <script>
	$(document).ready(function(){

		$('.messageinfo').click(function(){
		
			var messageid = $(this).data('id');
			
			// AJAX request
			$.ajax({
				url: './select.php',
				type: 'post',
				data: {messageid: messageid},
				success: function(response){ 
					// Add response in Modal body
					$('.modal-body').html(response);

					// Display Modal
					$('#messageModal').modal('show'); 
				}
			});
		});
	});
	</script>

    <script>
		$(function() {
			// Datatables basic
			$('#datatables-basic').DataTable({
				responsive: true
			});
			// Datatables with Buttons
			var datatablesButtons = $('#datatables-buttons').DataTable({
				lengthChange: !1,
				buttons: ["copy", "print"],
				responsive: true
			});
			datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)")
		});
	</script>

  </body>


</html>