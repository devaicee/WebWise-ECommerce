<?php

define('TITLE', "Login");
include 'assets/layouts/header.php';
check_logged_out();
?>

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Login</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Login</a>
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
                        <h4>New to our website?</h4>
                        <p>Dive into our expansive collection of digital products and discover a world of convenience and choice!</p>
                        <a class="primary-btn" href="register.php">Create an Account</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Log in to enter</h3>
                    <form class="row login_form" action="assets/includes/login.inc.php" method="post" id="contactForm" novalidate="novalidate">
                        <?php insert_csrf_token(); ?>
                        
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                            <sub class="text-danger">
                                <?php
                                    if (isset($_SESSION['ERRORS']['nouser']))
                                        echo $_SESSION['ERRORS']['nouser'];
                                ?>
                            </sub>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                            <sub class="text-danger">
                                <?php
                                    if (isset($_SESSION['ERRORS']['wrongpassword']))
                                        echo $_SESSION['ERRORS']['wrongpassword'];
                                ?>
                            </sub>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <input type="checkbox" id="f-option2" name="rememberme">
                                <label for="f-option2">Keep me logged in</label>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="loginsubmit" name="loginsubmit" class="primary-btn">Log In</button>
                            <a href="../reset-password/">Forgot Password?</a>
                        </div>
                    </form>
                    <div class="text-center">
                        <small class="text-success font-weight-bold">
                            <?php
                                if (isset($_SESSION['STATUS']['loginstatus']))
                                    echo $_SESSION['STATUS']['loginstatus'];
                            ?>
                        </small>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->

<?php
include 'assets/layouts/footer.php';
?>
