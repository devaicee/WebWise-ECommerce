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
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Submit Recommendation</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form id="recommendationForm">
          <div class="form-group">
            <label for="name">Your Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <label for="rating">Rating:</label>
            <select class="form-control" id="rating">
              <option value="1">1 Star</option>
              <option value="2">2 Stars</option>
              <option value="3">3 Stars</option>
              <option value="4">4 Stars</option>
              <option value="5">5 Stars</option>
            </select>
          </div>
          <div class="form-group">
            <label for="recommendationText">Recommendation:</label>
            <textarea class="form-control" id="recommendationText" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

	<body class="profile-page">
    <div class="page-header header-filter" data-parallax="true" style="background-image:url('http://wallpapere.org/wp-content/uploads/2012/02/black-and-white-city-night.png');"></div>
    <div class="main main-raised">
    <div class="profile-content">
            <div class="container">
                <div class="row">
                  <div class="col-md-6 ml-auto mr-auto">
                     <div class="profile">
                          <div class="avatar">
                              <img src="img/display-profile.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                          </div>
                          <div class="name">
                              <h3 class="title">Arshane Lee</h3>
                <h6>Designer</h6>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble" style="color: black"><i class="fa fa-dribbble"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter" style="color: black"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest" style="color: black"><i class="fa fa-pinterest"></i></a>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="description text-center">
                    <p>A visionary BSIT student who not only offers cutting-edge digital products but also crafts bespoke projects and designs captivating websites. 
											Dive into a realm of innovation and style with me – where technology meets creativity, and your digital aspirations come to life.</p>
                </div>
<style>
    .category-header h1 {
        color: #ffba00; /* Change text color of header to yellow */
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6 text-center">
            <div class="category-header">
                <h1>Products</h1>
            </div>
            <div class="uProducts-area">
                <!-- Products Content Goes Here -->
				<div class="product-details" style="display: flex; flex-wrap: nowrap;margin-top:40px;">
                    <div class="product-cell category" style="margin-right: 10px;"><span class="cell-label"></span>Physical Product</div>
                    <div class="product-cell creator" style="margin-right: 10px;"><span class="cell-label"></span>Thumbler</div>
                    <div class="product-cell sales" style="margin-right: 10px;"><span class="cell-label">Sales:</span> 14</div>
                    <div class="product-cell price"><span class="cell-label">Price:</span> ₱100</div>
                </div>
				<div class="product-details" style="display: flex; flex-wrap: nowrap;margin-top:8px;">
                    <div class="product-cell category" style="margin-right: 10px;"><span class="cell-label"></span>Physical Product</div>
                    <div class="product-cell creator" style="margin-right: 10px;"><span class="cell-label"></span>WebWise T-shirt</div>
                    <div class="product-cell sales" style="margin-right: 10px;"><span class="cell-label">Sales:</span> 14</div>
                    <div class="product-cell price"><span class="cell-label">Price:</span> ₱100</div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 text-center">
            <div class="category-header">
                <h1>Services</h1>
            </div>
            <div class="uServices-area">
                <!-- Services Content Goes Here -->
                <div class="product-details" style="display: flex; flex-wrap: nowrap;margin-top:10px;">
                    <div class="product-cell category" style="margin-right: 10px;"><span class="cell-label"></span>Digital Marketing</div>
                    <div class="product-cell creator" style="margin-right: 10px;"><span class="cell-label"></span>Digital Projects</div>
                    <div class="product-cell sales" style="margin-right: 10px;"><span class="cell-label">Sales:</span> 14</div>
                    <div class="product-cell price"><span class="cell-label">Price:</span> ₱450</div>
                </div>
				<div class="product-details" style="display: flex; flex-wrap: nowrap;margin-top:10px;">
                    <div class="product-cell category" style="margin-right: 10px;"><span class="cell-label"></span> Digital Marketing</div>
                    <div class="product-cell creator" style="margin-right: 10px;"><span class="cell-label"></span>Digital Service</div>
                    <div class="product-cell sales" style="margin-right: 10px;"><span class="cell-label">Sales:</span> 12</div>
                    <div class="product-cell price"><span class="cell-label">Price:</span> ₱560</div>
                </div>
            </div>
        </div>
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
  
  <footer class="footer text-center ">
	<p>Write <a href="#" id="recommendationLink">Arshane Lee</a> a recommendation</p>
    </footer>
  
<!-- Start review Area -->
<section class="review-area section-gap relative">
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row">
		<div class="active-review-carusel">
        <!-- Recommendations will be appended here -->
        <div id="reviews" class="active-review-carousel">
          <!-- Recommendations will be appended here -->
        </div>
        <!-- End of Recommendations -->
        
        <!-- Other reviews -->
				<div class="single-review item">
					<div class="title justify-content-start d-flex">
						<a href="#"><h4>Armana Penchang</h4></a>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
					<p>
						The team behind this platform are cool and fun, they are easy to talk to and are really nice.
					</p>
				</div>	
				<div class="single-review item">
					<div class="title justify-content-start d-flex">
						<a href="#"><h4>Hulda Sutton</h4></a>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
					<p>
						As a creator looking for a platform to showcase and sell my digital products, I couldn't have asked for a better place than WebWise. This platform seamlessly connects creators like myself with consumers eager to discover unique digital content.						</p>
					</p>
				</div>																												
			</div>
		</div>
	</div>	
</section>
<!-- End review Area -->

<section class="footer-mssg">
	<div class="container">
		<div class="work">
			LET'S WORK TOGETHER
		</div>
		<button class="send-message-btn">Send Message</button>
	</div>
</section>


<?php

include 'assets/layouts/footer.php'

?>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
      // Add click event listener to the recommendation link
      $("#recommendationLink").click(function(e) {
        e.preventDefault(); // Prevent default link behavior
        $("#myModal").modal("show"); // Show the modal
      });

      // Handle form submission for recommendation
      $("#recommendationForm").submit(function(e) {
        e.preventDefault(); // Prevent default form submission
        var name = $("#name").val(); // Get name
        var rating = parseInt($("#rating").val()); // Get rating
        var recommendationText = $("#recommendationText").val(); // Get recommendation text
        $("#myModal").modal("hide"); // Hide the modal
        displayRecommendation(name, rating, recommendationText); // Display the recommendation
      });

      // Function to display recommendation in the reviews section
      function displayRecommendation(name, rating, recommendation) {
        var stars = '';
        for (var i = 0; i < rating; i++) {
          stars += '<span class="fa fa-star checked"></span>';
        }
        for (var i = rating; i < 5; i++) {
          stars += '<span class="fa fa-star"></span>';
        }
        var recommendationItem = '<div class="single-review item">' +
          '<div class="title justify-content-start d-flex">' +
          '<h4>' + name + '</h4>' +
          '<div class="star">' + stars + '</div>' +
          '</div>' +
          '<p>' + recommendation + '</p>' +
          '</div>';
        $("#reviews").append(recommendationItem);
      }
    });
  </script>