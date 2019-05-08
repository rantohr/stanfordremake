<section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(<?php echo base_url() ?>assets/img/bg-img/27.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="page-title">Faculty Profiles</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Faculty Profiles</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="our-speaker-area section-padding-100">
    <div class="container">
        <div class="row">
            <?php foreach ($list_staff as $staff){ ?>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <div class="speaker-single-thumb">
                            <img src="<?php echo base_url() ?>assets/img/bg-img/<?php echo $staff['img'] ?>" alt="">
                        </div>
                        <div class="social-info">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                        </div>
                        <div class="speaker-info">
                            <h5><?php echo $staff['name'] ?></h5>
                            <p><?php echo $staff['job'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>