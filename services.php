<?php

define('TITLE', "Products");
include 'assets/layouts/header.php';


?>

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Services Pages</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Services</span></a>
					</nav>
				</div>
			</div>
		</div>
	</section>
    <!-- End Banner Area -->

  <div class="app-container">
    <div class="app-content">
      <div class="app-content-actions">
      <form method="GET" action="">
          <input class="search-bar" name="search" placeholder="Search..." type="text">
          <button type="submit">Search</button>
        </form>        
      <div class="app-content-actions-wrapper">
          <div class="filter-button-wrapper">
            <button class="action-button filter jsFilter"><span>Filter</span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg></button>
            <div class="filter-menu">
              <label>Category</label>
              <select>
                <option value="all-categories">All Categories</option>
                <option value="business">Business</option>                     
                <option value="digital-marketing">Digital Marketing</option>
                <option value="graphics-design">Graphics Design</option>
                <option value="music-and-audio">Music and Audio</option>
                <option value="lifestyle">Lifestyle</option>
              </select>
              <div class="filter-menu-buttons">
                <button class="filter-button reset">
                  Reset
                </button>
                <button class="filter-button apply">
                  Apply
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="products-area-wrapper gridView">
        <div class="products-header">
          <div class="product-cell image">
            Items
            <button class="sort-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
            </button>
          </div>
          <div class="product-cell category">Category<button class="sort-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
            </button></div>
          <div class="product-cell sales">Sales<button class="sort-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
            </button></div>
          <div class="product-cell price">Price<button class="sort-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
            </button></div>
        </div>
        <div class="products-row digital-marketing">
    <a href="details.php?image=6300b8c8c883ab32b858e299_craft%20design.jpg&product_name=Product%20Marketing&category=Digital%20Marketing&creator=Arshane%20Lee&price=700" class="cell-more-button">
        <span class="button-text">View Details</span>
    </a>
    <div class="product-cell image">
        <img src="img/ProdImg/6300b8c8c883ab32b858e299_craft design.jpg" alt="product" style="max-width: 100%; height: auto;">
        <span>Product Marketing</span>
    </div>
    <div class="product-cell category"><span class="cell-label">Category:</span>Digital Marketing</div>
    <div class="product-cell creator"><span class="cell-label">Creator:</span>Arshane Lee</div>
    <div class="product-cell sales"><span class="cell-label">Sales:</span>16</div>
    <div class="product-cell price"><span class="cell-label">Price:</span>₱700</div>
</div>

<!-- Business Products -->
<div class="products-row business">
    <a href="details.php?image=New%20Project%201%20%5B7A467A2%5D.png&product_name=Business%20Management&category=Business&creator=Christine%20Tuga-on&price=850" class="cell-more-button">
        <span class="button-text">View Details</span>
    </a>
    <div class="product-cell image">
        <img src="img/ProdImg/New Project 1 [7A467A2].png" alt="product" style="max-width: 100%; height: auto;">
        <span>Business Management</span>
    </div>
    <div class="product-cell category"><span class="cell-label">Category:</span>Business</div>
    <div class="product-cell creator"><span class="cell-label">Creator:</span>Christine Tuga-on</div>
    <div class="product-cell sales"><span class="cell-label">Sales:</span>10</div>
    <div class="product-cell price"><span class="cell-label">Price:</span>₱850</div>
</div>

<!-- Other Services -->
<div class="products-row digital-marketing">
    <a href="details.php?image=images%20(46).jpeg&product_name=Digital%20Service&category=Digital%20Marketing&creator=Arshane%20Lee&price=560" class="cell-more-button">
        <span class="button-text">View Details</span>
    </a>
    <div class="product-cell image">
        <img src="img/ProdImg/images (46).jpeg" alt="product" style="max-width: 100%; height: auto;">
        <span>Digital Service</span>
    </div>
    <div class="product-cell category"><span class="cell-label">Category:</span>Digital Marketing</div>
    <div class="product-cell creator"><span class="cell-label">Creator:</span>Arshane Lee</div>
    <div class="product-cell sales"><span class="cell-label">Sales:</span>12</div>
    <div class="product-cell price"><span class="cell-label">Price:</span>₱560</div>
</div>

<div class="products-row digital-marketing">
    <a href="details.php?image=New%20Project%204%20%5B4CDD1E7%5D.png&product_name=Digital%20Projects&category=Digital%20Marketing&creator=Arshane%20Lee&price=450" class="cell-more-button">
        <span class="button-text">View Details</span>
    </a>
    <div class="product-cell image">
        <img src="img/ProdImg/New Project 4 [4CDD1E7].png" alt="product" style="max-width: 100%; height: auto;">
        <span>Digital Projects</span>
    </div>
    <div class="product-cell category"><span class="cell-label">Category:</span>Digital Marketing</div>
    <div class="product-cell creator"><span class="cell-label">Creator:</span>Arshane Lee</div>
    <div class="product-cell sales"><span class="cell-label">Sales:</span>14</div>
    <div class="product-cell price"><span class="cell-label">Price:</span>₱450</div>
</div>

<div class="products-row graphics-design">
    <a href="details.php?image=New%20Project%2017%20%5BB70888D%5D.png&product_name=Graphic%20Tutorial&category=Graphics%20Design&creator=Arman%20James%20Dela%20Peña&price=1299" class="cell-more-button">
        <span class="button-text">View Details</span>
    </a>
    <div class="product-cell image">
        <img src="img/ProdImg/New Project 17 [B70888D].png" alt="product" style="max-width: 100%; height: auto;">
        <span>Graphic Tutorial</span>
    </div>
    <div class="product-cell category"><span class="cell-label">Category:</span>Graphics Design</div>
    <div class="product-cell creator"><span class="cell-label">Creator:</span>Arman James Dela Peña</div>
    <div class="product-cell sales"><span class="cell-label">Sales:</span>15</div>
    <div class="product-cell price"><span class="cell-label">Price:</span>₱1299</div>
</div>

<div class="products-row music-and-audio">
    <a href="details.php?image=New%20Project%201%20%5B01EC0B8%5D.png&product_name=MV%20Streaming&category=Music%20and%20Audio&creator=Renz%20Castro&price=560" class="cell-more-button">
        <span class="button-text">View Details</span>
    </a>
    <div class="product-cell image">
        <img src="img/ProdImg/New Project 1 [01EC0B8].png" alt="product" style="max-width: 100%; height: auto;">
        <span>MV Streaming</span>
    </div>
    <div class="product-cell category"><span class="cell-label">Category:</span>Music and Audio</div>
    <div class="product-cell creator"><span class="cell-label">Creator:</span>Renz Castro</div>
    <div class="product-cell sales"><span class="cell-label">Sales:</span>23</div>
    <div class="product-cell price"><span class="cell-label">Price:</span>₱560</div>
</div>

<div class="products-row lifestyle">
    <a href="details.php?image=New%20Project%201%20%5B01EC0B8%5D.png&product_name=Work%20Out%20Plans&category=Lifestyle&creator=Baby%20Lyka%20Cinco&price=200" class="cell-more-button">
<span class="button-text">View Details</span>
</a>
<div class="product-cell image">
<img src="img/ProdImg/p8.png" alt="product" style="max-width: 100%; height: auto;">
<span>Work Out Plans</span>
</div>
<div class="product-cell category"><span class="cell-label">Category:</span>Lifestyle</div>
<div class="product-cell creator"><span class="cell-label">Creator:</span>Baby Lyka Cinco</div>
<div class="product-cell sales"><span class="cell-label">Sales:</span>18</div>
<div class="product-cell price"><span class="cell-label">Price:</span>₱200</div>

</div>
<div class="products-row business">
    <a href="details.php?image=images%20(44).jpeg&product_name=Business%20Planning&category=Business&creator=Christine%20Tuga-on&price=550" class="cell-more-button">
        <span class="button-text">View Details</span>
    </a>
    <div class="product-cell image">
        <img src="img/ProdImg/images (44).jpeg" alt="product" style="max-width: 100%; height: auto;">
        <span>Business Planning</span>
    </div>
    <div class="product-cell category"><span class="cell-label">Category:</span>Business</div>
    <div class="product-cell creator"><span class="cell-label">Creator:</span>Christine Tuga-on</div>
    <div class="product-cell sales"><span class="cell-label">Sales:</span>17</div>
    <div class="product-cell price"><span class="cell-label">Price:</span>₱550</div>
</div>
<div class="products-row graphics-design">
    <a href="details.php?image=Video%20and%20Photo%20Editing.jpg&product_name=Video%20&%20Photo%20Editing&category=Graphics%20Design&creator=Arman%20James%20Dela%20Peña&price=1200" class="cell-more-button">
        <span class="button-text">View Details</span>
    </a>
    <div class="product-cell image">
        <img src="img/ProdImg/Video and Photo Editing.jpg" alt="product" style="max-width: 100%; height: auto;">
        <span>Video & Photo Editing</span>
    </div>
    <div class="product-cell category"><span class="cell-label">Category:</span>Graphics Design</div>
    <div class="product-cell creator"><span class="cell-label">Creator:</span>Arman James Dela Peña</div>
    <div class="product-cell sales"><span class="cell-label">Sales:</span>10</div>
    <div class="product-cell price"><span class="cell-label">Price:</span>₱1200</div>
</div>
<div class="products-row music-and-audio">
    <a href="details.php?image=New%20Project%20%5BB347ED2%5D.png&product_name=Download%20Music&category=Music%20and%20Audio&creator=Renz%20Castro&price=350" class="cell-more-button">
        <span class="button-text">View Details</span>
    </a>
    <div class="product-cell image">
        <img src="img/ProdImg/New Project [B347ED2].png" alt="product" style="max-width: 100%; height: auto;">
        <span>Download Music</span>
    </div>
    <div class="product-cell category"><span class="cell-label">Category:</span>Music and Audio</div>
    <div class="product-cell creator"><span class="cell-label">Creator:</span>Renz Castro</div>
    <div class="product-cell sales"><span class="cell-label">Sales:</span>19</div>
    <div class="product-cell price"><span class="cell-label">Price:</span>₱350</div>
</div>
<div class="products-row lifestyle">
    <a href="details.php?image=New%20Project%204%20%5B582B4B7%5D.png&product_name=Healthy%20Habits&category=Lifestyle&creator=Baby%20Lyka%20Cinco&price=250" class="cell-more-button">
        <span class="button-text">View Details</span>
    </a>
    <div class="product-cell image">
        <img src="img/ProdImg/New Project 4 [582B4B7].png" alt="product" style="max-width: 100%; height: auto;">
        <span>Healthy Habits</span>
    </div>
    <div class="product-cell category"><span class="cell-label">Category:</span>Lifestyle</div>
    <div class="product-cell creator"><span class="cell-label">Creator:</span>Baby Lyka Cinco</div>
    <div class="product-cell sales"><span class="cell-label">Sales:</span>12</div>
    <div class="product-cell price"><span class="cell-label">Price:</span>₱250</div>
</div>



      </div>
    </div>
  </div>


  <?php
  include 'assets/layouts/footer.php';
?>
