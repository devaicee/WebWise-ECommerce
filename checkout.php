<?php

define('TITLE', "Checkout");
include 'assets/layouts/header.php';

?>

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Checkout</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.php">Checkout</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
<section class="checkout_area section_gap">
    <div class="container">
        <div class="returning_customer">
            <div class="check_title">
                <h2>Returning Customer? <a href="#">Click here to login</a></h2>
            </div>
            <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new
                customer, please proceed to the Billing & Shipping section.</p>
            <form class="row contact_form" id="billingForm" action="#" method="post" novalidate="novalidate">
                <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="first" name="first">
                                <span class="placeholder" data-placeholder="First name"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="last" name="last">
                                <span class="placeholder" data-placeholder="Last name"></span>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="company" name="company" placeholder="Company name">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="number" name="number">
                                <span class="placeholder" data-placeholder="Phone number"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="email" name="email">
                                <span class="placeholder" data-placeholder="Email Address"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select class="country_select" id="country" name="country">
                                    <option value="1">Country</option>
                                    <option value="2">Country</option>
                                    <option value="4">Country</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add1" name="add1">
                                <span class="placeholder" data-placeholder="Address line 01"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add2" name="add2">
                                <span class="placeholder" data-placeholder="Address line 02"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="city" name="city">
                                <span class="placeholder" data-placeholder="Town/City"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select class="country_select" id="district" name="district">
                                    <option value="1">District</option>
                                    <option value="2">District</option>
                                    <option value="4">District</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="create_account" name="create_account">
                                    <label for="create_account">Create an account?</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <h3>Shipping Details</h3>
                                    <input type="checkbox" id="ship_to_different" name="ship_to_different">
                                    <label for="ship_to_different">Ship to a different address?</label>
                                </div>
                                <textarea class="form-control" name="order_notes" id="order_notes" rows="1" placeholder="Order Notes"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                        
                            <div class="payment_item active">
                                <div class="radion_btn">
                                    <input type="radio" id="cash_on_delivery" name="payment_method" value="cash_on_delivery">
                                    <label for="cash_on_delivery">Cash on Delivery</label>
                                    <div class="check"></div>
                                </div>
                                <div class="radion_btn">
                                    <input type="radio" id="gcash" name="payment_method" value="gcash">
                                    <label for="gcash">G-Cash</label>
                                    <div class="check"></div>
                                </div>
                                <div class="radion_btn">
                                    <input type="radio" id="paymaya" name="payment_method" value="paymaya">
                                    <label for="paymaya">Paymaya</label>
                                    <div class="check"></div>
                                </div>
                            </div>
                            <div class="creat_account">
                                <input type="checkbox" id="terms_conditions" name="terms_conditions">
                                <label for="terms_conditions">I’ve read and accept the <a href="#">terms & conditions*</a></label>
                            </div>
                            <button type="submit" class="primary-btn" onclick="return validateForm()">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->

<?php

include 'assets/layouts/footer.php'

?>

<script>
    // Function to validate the billing details form
    function validateForm() {
        var firstName = document.getElementById('first').value;
        var lastName = document.getElementById('last').value;
        var phoneNumber = document.getElementById('number').value;
        var emailAddress = document.getElementById('email').value;
        var address1 = document.getElementById('add1').value;
        var city = document.getElementById('city').value;
        var zipCode = document.getElementById('zip').value;

        // Check if any of the required fields are empty
        if (firstName === '' || lastName === '' || phoneNumber === '' || emailAddress === '' || address1 === '' || city === '' || zipCode === '') {
            alert('Please fill out all the required fields in the billing details section.');
            return false; // Prevent form submission
        }
        return true; // Allow form submission
    }

    // Add event listener to the form submission
    document.getElementById('billingForm').addEventListener('submit', function(event) {
        // Validate form before submission
        var isValid = validateForm();

        // If form is not valid, prevent submission
        if (!isValid) {
            event.preventDefault();
        }
    });
</script>