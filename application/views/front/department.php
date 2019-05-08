
    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(<?php echo base_url() ?>assets/img/bg-img/37.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Departments</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Departments</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Our Blog Area Start -->
    <div class="our-blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <?php
                foreach ($list_dept as $item){
                ?>
                    <!-- Single Blog Area -->
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="single-blog-area style-2 wow fadeInUp" data-wow-delay="300ms">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb">
                                <img src="<?php echo base_url() ?>assets/img/bg-img/<?php echo $item['img']; ?>" alt="">
                            </div>
                            <div class="single-blog-text text-center">
                                <a class="blog-title" href="<?php echo base_url() ?>index.php/Welcome/Department/?id=<?php echo $item['id']; ?>"><?php echo $item['name']; ?></a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i> <?php echo $item['founded_in'] ?></a>
                                    <a class="post-author" href="#"><i class="zmdi zmdi-account"></i> <?php echo $item['director'] ?></a>
                                </div>
                                <p><?php echo substr($item['description'],0,100); ?>...</p>
                            </div>
                            <div class="blog-btn">
                                <a href="<?php echo base_url() ?>department/<?php echo $item['id'].'/'.str_replace(' ','-',$item['name']); ?>"><i class="zmdi zmdi-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
    <!-- Our Blog Area End -->