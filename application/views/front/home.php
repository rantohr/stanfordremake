<section class="welcome-area">
    <div class="welcome-slides owl-carousel">
        <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url(<?php echo base_url() ?>assets/img/bg-img/1.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="welcome-text text-right">
                            <h2 data-animation="fadeInUp" data-delay="300ms">Stanford <br>University</h2>
                            <h6 data-animation="fadeInUp" data-delay="500ms">Stanford, California, US</h6>
                            <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url(<?php echo base_url() ?>assets/img/bg-img/45.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="welcome-text-two text-center">
                            <h5 data-animation="fadeInUp" data-delay="100ms">Explore</h5>
                            <h2 data-animation="fadeInUp" data-delay="300ms">STANFORD UNIVERSITY</h2>
                            <div class="event-meta" data-animation="fadeInUp" data-delay="500ms">
                                <a class="event-date" href="#"><i class="zmdi zmdi-account"></i>Leland & Jane Stanford</a>
                                <a class="event-author" href="#"><i class="zmdi zmdi-alarm-check"></i>1885 </a>
                            </div>
                            <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="icon-scroll" id="scrollDown"></div>
</section>
<section class="about-us-countdown-area section-padding-100-0" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="about-content-text mb-80">
                    <h6 class="wow fadeInUp" data-wow-delay="300ms">About the campus</h6>
                    <h3 class="wow fadeInUp" data-wow-delay="300ms">Welcome to Stanford University</h3>
                    <p class="wow fadeInUp" data-wow-delay="300ms">Comprising more than 25 offices and centers, Student Affairs provides a broad range of services and support to Stanford students, including leadership development, residential programs, public service, career exploration and community engagement</p>
                    <a href="<?php echo base_url() ?>contact/" class="btn confer-btn mt-50 wow fadeInUp" data-wow-delay="300ms">Interested <i class="zmdi zmdi-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">
                    <img src="<?php echo base_url() ?>assets/img/bg-img/2.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="countdown-up-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-3">
                    <div class="countdown-content-text mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6>Important Date</h6>
                        <h4>Count Every Second Until the Registration</h4>
                    </div>
                </div>
                <div class="col-12 col-md-9">
                    <div class="countdown-timer mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <div id="clock"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="our-speaker-area bg-img bg-gradient-overlay section-padding-100-60" style="background-image: url(<?php echo base_url() ?>assets/img/bg-img/3.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                    <p>Our Professors</p>
                    <h4>Who’s behind Stanford</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($some_staff as $staff){ ?>
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
            <div class="col-12">
                <div class="more-speaker-btn text-center mt-20 mb-40 wow fadeInUp" data-wow-delay="300ms">
                    <a class="btn confer-btn-white" href="<?php echo base_url() ?>profiles/">view all profiles<i class="zmdi zmdi-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="our-sponsor-client-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                    <p>Partners &amp; Sponsors</p>
                    <h4>OFFICIAL PARTNERS</h4>
                </div>
            </div>
        </div>
        <div class="row"> <div class="col-12"> <div class="our-sponsor-area d-flex flex-wrap"> <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms"> <a href="#"><div class="partners-logo" style='background: url("<?php echo base_url() ?>assets/img/core-img/partners-logo.png") no-repeat; background-position: 0 -120px;'></div></a> </div><div class="single-sponsor wow fadeInUp" data-wow-delay="300ms"> <a href="#"><div class="partners-logo" style='background: url("<?php echo base_url() ?>assets/img/core-img/partners-logo.png") no-repeat; background-position: 0 -240px;'></div></a> </div><div class="single-sponsor wow fadeInUp" data-wow-delay="300ms"> <a href="#"><div class="partners-logo" style='background: url("<?php echo base_url() ?>assets/img/core-img/partners-logo.png") no-repeat; background-position: 0 -360px;'></div></a> </div><div class="single-sponsor wow fadeInUp" data-wow-delay="300ms"> <a href="#"><div class="partners-logo" style='background: url("<?php echo base_url() ?>assets/img/core-img/partners-logo.png") no-repeat; background-position: 0 -480px;'></div></a> </div><div class="single-sponsor wow fadeInUp" data-wow-delay="300ms"> <a href="#"><div class="partners-logo" style='background: url("<?php echo base_url() ?>assets/img/core-img/partners-logo.png") no-repeat; background-position: 0 -600px;'></div></a> </div><div class="single-sponsor wow fadeInUp" data-wow-delay="300ms"> <a href="#"><div class="partners-logo" style='background: url("<?php echo base_url() ?>assets/img/core-img/partners-logo.png") no-repeat; background-position: 0 -720px;'></div></a> </div><div class="single-sponsor wow fadeInUp" data-wow-delay="300ms"> <a href="#"><div class="partners-logo" style='background: url("<?php echo base_url() ?>assets/img/core-img/partners-logo.png") no-repeat; background-position: 0 -840px;'></div></a> </div><div class="single-sponsor wow fadeInUp" data-wow-delay="300ms"> <a href="#"><div class="partners-logo" style='background: url("<?php echo base_url() ?>assets/img/core-img/partners-logo.png") no-repeat; background-position: 0 0px;'></div></a> </div></div></div></div>
    </div>
</section>
<section class="our-blog-area bg-img bg-gradient-overlay section-padding-100-60" style="background-image: url(<?php echo base_url() ?>assets/img/bg-img/17.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                    <p>Our Department</p>
                    <h4>Most popular</h4>
                </div>
            </div>
            <?php
            foreach ($some_dept as $item){
                ?>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-blog-area style-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb">
                            <img src="<?php echo base_url() ?>assets/img/bg-img/<?php echo $item['img']; ?>" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="<?php echo base_url() ?>index.php/Welcome/Department/?id=<?php echo $item['id']; ?>"><?php echo $item['name']; ?></a>
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
</section>
<section class="contact-our-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                    <p>Have Question?</p>
                    <h4>Contact us</h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-12 col-sm-3">
                <div class="contact-information mb-100">
                    <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                        <p>Address:</p>
                        <h6><?php echo $contact_info['address']; ?></h6>
                    </div>
                    <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                        <p>Phone:</p>
                        <h6><?php echo $contact_info['phone']; ?></h6>
                    </div>
                    <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                        <p>Email:</p>
                        <h6><?php echo $contact_info['email']; ?></h6>
                    </div>
                    <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                        <p>Website:</p>
                        <h6><?php echo $contact_info['website']; ?></h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-8"> <div class="contact_from_area mb-100 clearfix wow fadeInUp" data-wow-delay="300ms"> <div class="contact_form"> <form action="" method="post" id="main_contact_form"> <div class="contact_input_area"> <div id="success_fail_info"></div><div class="row"> <div class="col-12 col-lg-6"> <div class="form-group"> <input type="text" class="form-control mb-30" name="name" id="name" placeholder="Your Name"> </div></div><div class="col-12 col-lg-6"> <div class="form-group"> <input type="text" class="form-control mb-30" name="name" id="name2" placeholder="Last Name"> </div></div><div class="col-12 col-lg-6"> <div class="form-group"> <input type="email" class="form-control mb-30" name="email" id="email" placeholder="E-mail"> </div></div><div class="col-12 col-lg-6"> <div class="form-group"> <input type="text" class="form-control mb-30" name="subject" id="subject" placeholder="Your Number"> </div></div><div class="col-12"> <div class="form-group"> <textarea name="message" class="form-control mb-30" id="message" cols="30" rows="6" placeholder="Your Message *"></textarea> </div></div><div class="col-12"> <button type="submit" class="btn confer-btn">Send Message <i class="zmdi zmdi-long-arrow-right"></i></button> </div></div></div></form> </div></div></div>
        </div>
    </div>
</section>
