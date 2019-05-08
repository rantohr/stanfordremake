<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stanford - Admin Dashboad</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url() ?>assets/img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">

</head>

<body style="background-color: #e5e5e5">
<div class="container">
    <!-- Contact Us Area Start -->
    <section class="contact--us-area section-padding-100-0" style="background-color: #FFFFFF; margin-top: 100px; padding-top: 0px">
        <div style="height: 100px;background-color: black">
            <!--<h1 style="text-align: center; padding-top: 50px">STANFORD UNIVERSITY</h1>-->
            <IMG src="<?php echo base_url() ?>assets/img/core-img/logo.png" alt="" style="display: block; margin-left: auto; margin-right: auto; width: 200px; padding: 50px 0px 50px 0px;">
        </div>
        <div class="container">
            <div class="row">
                <div class="contact_from_area mb-100 clearfix" style="margin-top: 10%; margin-left: 20%;">
                    <div class="contact_form">
                        <form action="<?php echo base_url() ?>index.php?c=Administrator&m=loadLog" method="post">
                            <div class="contact_input_area">
                                <div class="row">
                                    <!-- Form Group -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-30" name="username" id="username" placeholder="Username" required>
                                        </div>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="password" class="form-control mb-30" name="password" id="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="col-12">
                                        <button type="submit" class="btn confer-btn" style="float: right;">Sign in <i class="zmdi zmdi-long-arrow-right"></i></button>
                                    </div>
                                </div>
                                <br>
                                <p class="alert-danger"><?php if(isset($error)) echo $error ?></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div hidden="hidden" id="baseurl"><?php echo base_url() ?></div>
<script>
    function loadena(){
        var un = document.getElementById('username').value;
        var mdp = document.getElementById('password').value;
        var baseurl = document.getElementById('baseurl').innerHTML;
        var link = baseurl+'login/'+un+'/'+mdp+'/';
        alert(link);
        window.location.href = link;
    }
</script>

<!-- **** All JS Files ***** -->
<!-- jQuery 2.2.4 -->
<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<!-- Popper -->
<script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<!-- All Plugins -->
<script src="<?php echo base_url() ?>assets/js/confer.bundle.js"></script>
<!-- Active -->
<script src="<?php echo base_url() ?>assets/js/default-assets/active.js"></script>

</body>

</html>
