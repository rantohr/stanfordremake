<section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(<?php echo base_url() ?>assets/img/bg-img/37.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="page-title">Department</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>index.php/Welcome/?page=blog">School</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Department</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="confer-blog-details-area section-padding-100-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 col-xl-9">
                <div class="pr-lg-4 mb-100">
                    <div class="post-details-content">
                        <div class="post-blog-thumbnail mb-30">
                            <img src="<?php echo base_url() ?>assets/img/bg-img/<?php echo $dept['img']; ?>" alt="">
                        </div>
                        <h4 class="post-title"><?php echo $dept['name']; ?></h4>
                        <div class="post-meta">
                            <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i> <?php echo $dept['founded_in']; ?></a>
                            <a class="post-author" href="#"><i class="zmdi zmdi-account"></i> <?php echo $dept['director']; ?></a>
                            <a class="post-author" href="#"><i class="zmdi zmdi-favorite-outline"></i> <?php echo $dept['school']; ?></a>
                        </div>
                        <p><?php echo $dept['description']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>