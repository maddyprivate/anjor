<?php include 'header.php'; ?>

<section class="fullscreen" data-bg-parallax="./dg/image5.jpg">

    <div class="shape-divider" data-style="1" data-height="300"></div>
    <div class="container-wide">
        <div class="container-fullscreen">
            <div class="text-middle">
            </div>
        </div>
    </div>
</section>

<!-- SOCIAL INITIATIVES -->
<section>
    <div class="container mb-4">
        <h2 class="fw-bold">Photo Gallery</h2>
    </div>
    <div class="container-fluid">
        <div class="grid-layout grid-5-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery">
            <?php for($i=1;$i<=10;$i++) {
                $imagePath = "./dg/gallery/".$i.".jpg";
            ?>
            <div class="grid-item">
                <a class="image-hover-zoom" href="<?php echo $imagePath; ?>"
                    data-lightbox="gallery-image">
                    <img src="<?php echo $imagePath; ?>">
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- FESTIVALS -->
<section class="pt-0 pb-0">
    <!-- Mango Festival -->
    <div class="container mb-4">
        <h3 class="fw-bold">Title</h3>
    </div>
    <div class="container-fluid">
        <div class="grid-layout grid-5-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery">
        <?php for($i=11;$i<=20;$i++) {
                $imagePath = "./dg/gallery/".$i.".jpg";
            ?>
            <div class="grid-item">
                <a class="image-hover-zoom" href="<?php echo $imagePath; ?>"
                    data-lightbox="gallery-image">
                    <img src="<?php echo $imagePath; ?>">
                </a>
            </div>
            <?php } ?>
        </div>
    </div>

    <div class="container mb-4">
        <h3 class="fw-bold">Title</h3>
    </div>
    <div class="container-fluid">
        <div class="grid-layout grid-5-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery">
        <?php for($i=21;$i<=30;$i++) {
                $imagePath = "./dg/gallery/".$i.".jpg";
            ?>
            <div class="grid-item">
                <a class="image-hover-zoom" href="<?php echo $imagePath; ?>"
                    data-lightbox="gallery-image">
                    <img src="<?php echo $imagePath; ?>">
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="container mb-4">
        <h3 class="fw-bold">Title</h3>
    </div>
    <div class="container-fluid">
        <div class="grid-layout grid-5-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery">
        <?php for($i=31;$i<=40;$i++) {
                $imagePath = "./dg/gallery/".$i.".jpg";
            ?>
            <div class="grid-item">
                <a class="image-hover-zoom" href="<?php echo $imagePath; ?>"
                    data-lightbox="gallery-image">
                    <img src="<?php echo $imagePath; ?>">
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="container mb-4">
        <h3 class="fw-bold">Title</h3>
    </div>
    <div class="container-fluid">
        <div class="grid-layout grid-5-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery">
        <?php for($i=41;$i<=50;$i++) {
                $imagePath = "./dg/gallery/".$i.".jpg";
            ?>
            <div class="grid-item">
                <a class="image-hover-zoom" href="<?php echo $imagePath; ?>"
                    data-lightbox="gallery-image">
                    <img src="<?php echo $imagePath; ?>">
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>