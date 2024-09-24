<?php

define('TITLE', "Register");
include 'assets/layouts/header.php';
check_logged_out();
?>

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Register</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Register</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="img/login.jpg" alt="">
                    <div class="hover">
                        <h4>Already part of our Community?</h4>
                        <p>Explore our digital products and enjoy a personalized shopping experience with your existing account.</p>
                        <a class="primary-btn" href="login.php">LOG IN</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Create an Account</h3>
                    <form class="row login_form" action="assets/includes/register.inc.php" method="post" enctype="multipart/form-data" id="contactForm" novalidate="novalidate">
                        <?php insert_csrf_token(); ?>

                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                            <sub class="text-danger">
                                <?php
                                    if (isset($_SESSION['ERRORS']['usernameerror']))
                                        echo $_SESSION['ERRORS']['usernameerror'];
                                ?>
                            </sub>
                        </div>

                        <div class="col-md-12 form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email address" required onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'">
                            <sub class="text-danger">
                                <?php
                                    if (isset($_SESSION['ERRORS']['emailerror']))
                                        echo $_SESSION['ERRORS']['emailerror'];
                                ?>
                            </sub>
                        </div>

                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                        </div>

                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" required onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'">
                            <sub class="text-danger mb-4">
                                <?php
                                    if (isset($_SESSION['ERRORS']['passworderror']))
                                        echo $_SESSION['ERRORS']['passworderror'];
                                ?>
                            </sub>
                        </div>

                        <div class="col-md-12 form-group">
                            <button type="submit" name="signupsubmit" class="primary-btn">Signup</button>
                        </div>

                        <div class="col-md-12 form-group text-center">
                            <small class="text-success font-weight-bold">
                                <?php
                                    if (isset($_SESSION['STATUS']['signupstatus']))
                                        echo $_SESSION['STATUS']['signupstatus'];
                                ?>
                            </small>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->

<?php

include 'assets/layouts/footer.php';

?>

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#avatar").change(function() {
        console.log("here");
        readURL(this);
    });
</script>
