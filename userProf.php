<?php

define('TITLE', "User Profile");
include 'assets/layouts/header.php';

function xss_filter($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?> 

<div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header">
                <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <!-- Profile edit form content -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-lg-7">
                            <form class="form-auth" action="assets/includes/profile-edit.inc.php" method="post" enctype="multipart/form-data" autocomplete="off">
                                <?php insert_csrf_token(); ?>

                                <h6 class="h3 mt-3 mb-3 font-weight-normal text-muted text-center">Edit Your Profile</h6>

                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" id="username" name="username" class="form-control" placeholder="Username" value="<?php echo xss_filter($_SESSION['username']); ?>" autocomplete="off">
                                    <sub class="text-danger">
                                        <?php if (isset($_SESSION['ERRORS']['usernameerror'])) echo $_SESSION['ERRORS']['usernameerror']; ?>
                                    </sub>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email address" value="<?php echo xss_filter($_SESSION['email']); ?>">
                                    <sub class="text-danger">
                                        <?php if (isset($_SESSION['ERRORS']['emailerror'])) echo $_SESSION['ERRORS']['emailerror']; ?>
                                    </sub>
                                </div>

                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name" value="<?php echo xss_filter($_SESSION['first_name']); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name" value="<?php echo xss_filter($_SESSION['last_name']); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="headline">Headline</label>
                                    <input type="text" id="headline" name="headline" class="form-control" placeholder="Headline" value="<?php echo xss_filter($_SESSION['headline']); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="bio">Bio</label>
                                    <textarea id="bio" name="bio" class="form-control" rows="5" placeholder="Tell us about yourself..."><?php echo xss_filter($_SESSION['bio']); ?></textarea>
                                </div>

                                <hr>
                                <span class="h5 font-weight-normal text-muted mb-4">Password Edit</span>
                                <br>
                                <sub class="text-danger mb-4">
                                    <?php if (isset($_SESSION['ERRORS']['passworderror'])) echo $_SESSION['ERRORS']['passworderror']; ?>
                                </sub>
                                <br><br>

                                <div class="form-group">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Current Password" autocomplete="new-password">
                                </div>

                                <div class=" form-group">
                                    <input type="password" id="newpassword" name="newpassword" class="form-control" placeholder="New Password" autocomplete="new-password">
                                </div>

                                <div class=" form-group mb-5">
                                    <input type="password" id="confirmpassword" name="confirmpassword" class="form-control" placeholder="Confirm Password" autocomplete="new-password">
                                </div>

                                <button class="btn btn-lg btn-primary btn-block mb-5" type="submit" name='update-profile'>Confirm Changes</button>
                            </form>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
                <!-- End of profile edit form content -->
            </div>
        </div>
    </div>
</div>



<body class="profile-page">
    <div class="page-header header-filter" data-parallax="true"></div>
    <div class="main main-raised">
        <div class="profile-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="profile">
                            <div class="avatar">
                                <!-- Use $_SESSION['profile_image'] for dynamic profile image -->
                                <img src="img/display-profile.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                            </div>
                            <div class="name">
                                <!-- Use $_SESSION['username'] for dynamic username -->
                                <h3 class="title"><?php echo $_SESSION['username']; ?></h3>
                                <h6> <p><?php echo $_SESSION['headline']; ?></p></h6>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble" style="color: black"><i class="fa fa-dribbble"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter" style="color: black"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest" style="color: black"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="description text-center">
                    <!-- Use $_SESSION['headline'] for dynamic headline -->
                    <p><?php echo $_SESSION['bio']; ?></p>
                </div>

                <section class="edit-btn">
                    <div class="container">
                        <button class="edit-profile-btn" id="editProfileBtn">Edit Profile</button>
                    </div>
                </section>

						<div class="user-section">
							<div class="uServices-area">
									<div class="container">
										<div class="row justify-content-center">
											<div class="col-lg-8 col-md-12">
												<div class="row">
													<div class="col-12">
														<div class="category-header">
														<h1>Services</h1>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
              <div class="addUser">
              <div class="add-bag d-flex align-items-center">
                <a class="add-btn" href="products.html"><span class="lnr lnr-cross"></span></a>
                <span class="add-text text-uppercase">Add Services</span>
              </div>
            </div>
							<div class="uProducts-area">
									<div class="container">
										<div class="row justify-content-center">
											<div class="col-lg-8 col-md-12">
												<div class="row">
													<div class="col-12">
														<div class="category-header">
														<h1>Products</h1>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>
            <div class="addUser">
            <div class="add-bag d-flex align-items-center">
              <a class="add-btn" href="products.html"><span class="lnr lnr-cross"></span></a>
              <span class="add-text text-uppercase">Add Products</span>
            </div>						
          </div>
					
          <div class="tab-content tab-space">
          <div class="tab-pane active text-center gallery" id="studio">
          <div class="row">
          </div>
        </div>
            <div class="tab-pane text-center gallery" id="works">
            <div class="row">
            </div>
        </div>
            <div class="tab-pane text-center gallery" id="favorite">
            <div class="row">
          </div>
				</div>
				</div>
    
            </div>
        </div>
  </div>

  
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

<?php

include 'assets/layouts/footer.php'

?>
<script>
    // Wait for the document to be fully loaded
    document.addEventListener("DOMContentLoaded", function() {
        // Select the edit profile button
        var editProfileBtn = document.getElementById("editProfileBtn");
        // Attach a click event listener to the edit profile button
        editProfileBtn.addEventListener("click", function() {
            // Use jQuery to load the edit profile form content into the modal body
            $('#editProfileModal .modal-body').load('edit_profile_form.php', function() {
                // Once loaded, show the modal
                $('#editProfileModal').modal('show');
            });
        });
    });
</script>

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