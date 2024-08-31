<?php include 'header.php'; ?>

<section class="fullscreen" data-bg-parallax="./dg/005.jpg">

    <div class="shape-divider" data-style="1" data-height="250"></div>
    <div class="container-wide">
        <div class="container-fullscreen">
            <div class="text-middle">
            </div>
        </div>
    </div>
</section>

<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row">
            <!-- content -->
            <div class="content col-lg-8">
                <h2 class="fw-bold mb-5">SCHEDULE</h2>

                <h4 id="daily-schedule" class="text-center mb-3">DAILY SCHEDULE</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">TIME</th>
                            <th scope="col">RITUAL / ACTIVITY</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

                <h4 id="festival-schedule" class="text-center mt-5 mb-3">Festival Schedule</h4>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">DATE</th>
                            <th scope="col" class="text-uppercase">Festival</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>08th SEPTEMBER 2024</td>
                            <td>SHREE GANJANA MAHARAJ PUNYATITHI</td>
                        </tr>
                        <tr>
                            <td>12th OCTOBER 2024</td>
                            <td>VIJAYDASHMI, DASHARRA, SAI BABA JAYANTI</td>
                        </tr>
                        <tr>
                            <td>16th OCTOBER 2024</td>
                            <td>KOJAGIRI POURNIMA</td>
                        </tr>
                        <tr>
                            <td>01st NOV 2024</td>
                            <td>DIWALI PAHATA</td>
                        </tr>
                        <tr>
                            <td>14th DEC 2024 </td>
                            <td>SHRI DATTA MAHARAJ JAYANTI</td>
                        </tr>
                    </tbody>
                </table>

               <!-- <h4 id="upcoming-schedule" class="text-center mt-5 mb-3">UPCOMING SCHEDULE</h4>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">TIME</th>
                            <th scope="col">RITUAL / ACTIVITY</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

                <h2 id="yearly-schedule" class="fw-bold mt-5 mb-3">Calendar</h2>

                <div id="templeScheduleCalendar"></div>-->
                <!-- WALLPAPERS -->
                <h2 class="fw-bold mt-5 mb-4 text-center">WALLPAPERS</h2>
                <div class="carousel" data-items="3" data-lightbox="gallery">
                    <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="./dg/gallery/wallpapers/51.jpg" target="_blank">
                                    <img src="./dg/gallery/wallpapers/51.jpg" alt="  Wallpaper">
                                </a>
                            </div>
                            <div class="portfolio-description">
                                <a href="./wallpapers/1" target="_blank"><i
                                        class="fa fa-download"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="./dg/gallery/wallpapers/51.jpg" target="_blank">
                                    <img src="./dg/gallery/wallpapers/51.jpg" alt="  Wallpaper">
                                </a>
                            </div>
                            <div class="portfolio-description">
                                <a href="./wallpapers/2" target="_blank"><i
                                        class="fa fa-download"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="./dg/gallery/wallpapers/51.jpg" target="_blank">
                                    <img src="./dg/gallery/wallpapers/51.jpg" alt="  Wallpaper">
                                </a>
                            </div>
                            <div class="portfolio-description">
                                <a href="./wallpapers/3" target="_blank"><i
                                        class="fa fa-download"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="./dg/gallery/wallpapers/51.jpg" target="_blank">
                                    <img src="./dg/gallery/wallpapers/51.jpg" alt="  Wallpaper">
                                </a>
                            </div>
                            <div class="portfolio-description">
                                <a href="./wallpapers/4" target="_blank"><i
                                        class="fa fa-download"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="./dg/gallery/wallpapers/51.jpg" target="_blank">
                                    <img src="./dg/gallery/wallpapers/51.jpg" alt="  Wallpaper">
                                </a>
                            </div>
                            <div class="portfolio-description">
                                <a href="./wallpapers/5" target="_blank"><i
                                        class="fa fa-download"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar col-lg-4 pb-3">
                <?php include('mini-gallery.php'); ?>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="eventModal" tabindex="-1" role="modal" aria-labelledby="modal-label-2" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="eventModalTitle"></h4>
                <button aria-hidden="true" data-bs-dismiss="modal" class="float-end btn-close" type="button"><i
                        class="fa fa-times"></i></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <p id="eventModalDescription"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>