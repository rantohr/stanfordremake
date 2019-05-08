<style type="text/css" media="all">
    .bg-icon_location {
        width: 27px; height: 36px;
        background: url("<?php echo base_url() ?>assets/img/core-img/contact-icon.png") -10px -63px;
        margin: auto;
    }

    .bg-icon_tel {
        width: 33px; height: 33px;
        background: url('<?php echo base_url() ?>assets/img/core-img/contact-icon.png') -10px -10px;
        margin: auto;
    }

    .bg-icon_site {
        width: 31px; height: 31px;
        background: url('<?php echo base_url() ?>assets/img/core-img/contact-icon.png') -57px -63px;
        margin: auto;
    }

    .bg-icon_mail {
        width: 35px; height: 31px;
        background: url('<?php echo base_url() ?>assets/img/core-img/contact-icon.png') -63px -10px;
        margin: auto;
    }
</style>
    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(<?php echo base_url() ?>assets/img/bg-img/37.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Contact</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Contact Us Area Start -->
    <section class="contact--us-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Contact Us Thumb -->
                <div class="col-12 col-lg-6">
                    <div class="contact-us-thumb mb-100">
                        <img src="<?php echo base_url() ?>assets/img/bg-img/44.jpg" alt="">
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-12 col-lg-6">
                    <div class="contact_from_area mb-100 clearfix">
                        <!-- Contact Heading -->
                        <div class="contact-heading">
                            <h4>Contact us</h4>
                            <p> University departments / offices have unique mailing addresses and phone numbers. Please consult the campus directory or departmental websites.</p>
                        </div>
                        <div class="contact_form">
                            <form action="" method="post">
                                <div class="contact_input_area">
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="name" id="name" placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="name" id="name-2" placeholder="Last Name" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control mb-30" name="email" id="email" placeholder="E-mail" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="subject" id="subject" placeholder="Your Number">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control mb-30" id="message" cols="30" rows="6" placeholder="Message" required></textarea>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12">
                                            <button type="submit" class="btn confer-btn">Send Message <i class="zmdi zmdi-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Area End -->

    <!-- Map Area -->
    <div class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d516.6539566666473!2d47.532767871405845!3d-18.98608999656292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07bf95431f83d%3A0x7edb4de9ebd72707!2sIT+University!5e0!3m2!1sen!2sus!4v1556999795467!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <!-- Contact Info Area -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact--info-area bg-boxshadow">
                    <div class="row">
                        <!-- Single Contact Info -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="single-contact--info text-center">
                                <!-- Contact Info Icon -->
                                <div class="contact--info-icon">
                                    <div class="bg-icon_location"></div>
                                </div>
                                <h5><?php echo $contact_info['address']; ?></h5>
                            </div>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="single-contact--info text-center">
                                <!-- Contact Info Icon -->
                                <div class="contact--info-icon">
                                    <div class="bg-icon_tel"></div>
                                </div>
                                <h5><?php echo $contact_info['phone']; ?></h5>
                            </div>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="single-contact--info text-center">
                                <!-- Contact Info Icon -->
                                <div class="contact--info-icon">
                                    <div class="bg-icon_mail"></div>
                                </div>
                                <h5><?php echo $contact_info['email']; ?></h5>
                            </div>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="single-contact--info text-center">
                                <!-- Contact Info Icon -->
                                <div class="contact--info-icon">
                                    <div class="bg-icon_site"></div>
                                </div>
                                <h5><?php echo $contact_info['website']; ?></h5>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
