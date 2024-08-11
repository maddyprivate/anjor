<?php


$baseDir = 'C:/Users/HP/Desktop/Anjor/';
$baseUrl = '/path-to-your-server-directory/';
?>

    <!-- Add your CSS files here -->
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <!-- Your page content here -->

    <footer id="footer" class="inverted">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                    <a href="index.php" class="navbar-brand">
                    <img src="/dg/Logo.png" alt="logo" hight="120" width="120"></a>
                        <div class="widget">
                            <div class="widget-title">ABOUT US</div>
                            <p class="mb-4 text-light lh-lg">
                                The Shri Datta Maharaj Trimurti Shakti Pith is located in Pune and is under the management of the "Anjor Foundation," registered under No. E – 5525 in Pune.
                            </p>
                            <a href="./about.php" class="btn btn-outline btn-light" target="_blank">ABOUT US</a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="widget">
                            <div class="widget-title">LINKS</div>
                            <ul class="list">
                                <li><a href="./index.php">About</a></li>
                                <li><a href="./temple-schedule.php">Temple Schedule</a></li>
                                <li><a href="./festivals.php">Festivals</a></li>
                                <li><a href="./donation.php">Donations</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="live-darshan.php">Live Darshan</a></li>
                                <li><a href="./contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget">
                            <div class="widget-title">GET IN TOUCH</div>
                            <div class="icon-box effect small clean mb-3">
                            <a href="https://maps.app.goo.gl/DnYgFcRzW26WpAKh9" target="_blank"></a>
                            <div class="icon"><div class="icon-holder"><i class="fas fa-map-marker-alt"></i>
                        </div>
                                   
                                </div>
                                <p class="mb-0 text-light">
                                    Trimurti Shakti Pith,<br>
                                    Kashid Park, Pimple Gurav,<br>
                                    Maharashtra, India – 411061
                                </p>
                            </div>
                            
                            <div class="icon-box effect small clean mb-3">
                                <div class="icon"><i class="fas fa-phone"></i></div>
                                <p class="mb-0 text-light pt-0">Anjor Office<br>
                                    
                                    <a href="tel:+91 8181996363" class="lh-lg">+91 818 199 6363</a><br>
                                    <a href="tel:+91 9921782929" class="lh-lg">+91 992 178 2929</a>
                                </p>
                            </div>
                            <div class="icon-box effect small clean mb-3">
                                <div class="icon"><i class="fas fa-envelope"></i></div>
                                <p class="mb-0 text-light pt-0">Write us<br>
                                    <a href="mailto:trimurtishaktipith@gmail.com">trimurtishaktipith@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
        <div class="col-lg-3">
                <div class="widget">
                    <div class="widget-title">CONNECT WITH US</div>
                        <div class="social-icons social-icons-medium social-icons-rounded social-icons-colored">
                          <ul>
                             <li class="social-facebook">
                                <a href="https://www.facebook.com//"><i class="fab fa-facebook-f"></i></a>
                             </li>
                             <li class="social-youtube">
                                <a href="https://www.youtube.com/c/"><i class="fab fa-youtube"></i></a>
                             </li>
                             <li class="social-twitter">
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                             </li>
                             <li class="social-instagram">
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                             </li>
                             <li class="social-pinterest">
                                <a href="https://www.pinterest.com//"><i class="fab fa-pinterest"></i></a>
                             </li>
                          </ul>
                        </div>
                    </div>
                </div>
        </div>
    </div>
        </div>
        <div class="copyright-content">
            <div class="container">
                <div class="copyright-text text-left text-dg1">
                    &copy; Copyright 2024 Trimurti Shakti Pith.
                    All Rights Reserved. Powered by <a class="text-dg1" href="#" target="_blank">SDMTS</a>
                </div>
            </div>
        </div>
    </footer>

    <a id="scrollTop"><i class="fas fa-chevron-up"></i><i class="fas fa-chevron-up"></i></a>

    <!-- Plugins -->
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="./js/jquery.js"></script>
    <script src="./js/plugins.js"></script>

    <!-- Template functions -->
    <script src="./js/functions.js"></script>

    <!-- Page loader plugin files -->
    <script src="./plugins/pageloader/pageloader.js"></script>
    <script src="./plugins/pageloader/pageloader.init.js"></script>

    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/bootstrap-datetimepicker/tempusdominus-bootstrap-4.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            $('#calendarWidget').datetimepicker({
                inline: true,
                format: 'L'
            });
            $("#calendarWidget .day").on("click", function(e) {
                window.location.href = "./temple-schedule#yearly-schedule";
            });
        });
    </script>
</body>
</html>
