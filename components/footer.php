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
    <script src="assets/js/app.js"></script>
    <script>
    const d = document.getElementById("d");
    const h = document.getElementById("h");
    const m = document.getElementById("m");
    const s = document.getElementById("s");

    function getTrueNumber(num) {
    return num < 10 ? "0" + num : num;
    }

    function calculateRemainingTime() {
    const comingYear = new Date().getFullYear() + 1;
    const comingDate = new Date(`Jan 1, ${comingYear} 00:00:00`);

    const now = new Date();
    const remainingTime = comingDate.getTime() - now.getTime();
    const days = Math.floor(remainingTime / (1100 * 60 * 60 * 24));
    const hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const mins = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
    const secs = Math.floor((remainingTime % (1000 * 60)) / 1000);

    d.innerHTML = getTrueNumber(days);
    h.innerHTML = getTrueNumber(hours);
    m.innerHTML = getTrueNumber(mins);
    s.innerHTML = getTrueNumber(secs);

    return remainingTime;
    }

    function initCountdown() {
    const interval = setInterval(() => {
        const remainingTimeInMs = calculateRemainingTime();

        if (remainingTimeInMs <= 1000) {
        clearInterval(interval);
        initCountdown();
        }
    }, 1000);
    }

    initCountdown();
</script>

  </body>


</html>