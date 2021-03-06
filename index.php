<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Kayumanggi Foods</title>

	<!-- UIkit CSS -->
	<link rel="stylesheet" href="css/uikit.min.css"/>
	<link rel="stylesheet" href="css/styles.css"/>
</head>
<body>
	<!-- Navbar -->
	<!-- Hidden on tablets and larger -->
	<nav class="uk-navbar-container uk-hidden@m" uk-navbar="dropbar: true; dropbar-mode: push" uk-sticky="sel-target: .uk-navbar; cls-active: uk-navbar-sticky">
	    <div class="uk-navbar-left">
	    	<ul class="uk-navbar-nav">
	    		<li>
	    			<a class="uk-navbar-toggle" uk-navbar-toggle-icon href="#"></a>
		        	<div class="uk-navbar-dropdown">
		        	<ul class="uk-nav uk-navbar-dropdown-nav">
		        		<li><a href="#">Home</a></li>
		        		<li><a href="pages/our-company.php">Company</a></li>
		        		<li><a href="pages/our-products.php">Products</a></li>
						<li><a href="pages/locations.php">Locations</a></li>
		        	</ul>
		        	</div>
	    		</li>
	    	</ul>
	    </div>
	    <div class="uk-navbar-center">
	    	<a href="#" class="uk-navbar-item uk-logo"><img id="logo-small" src="assets/img/logo-border.png"></a>
	    </div>
	</nav>

	<!-- Visible on tablets and larger -->
	<div class="uk-visible@m" uk-sticky="sel-target: .uk-navbar; cls-active: uk-navbar-sticky">
		<nav class="uk-navbar">
			<div class="uk-navbar-center">
				<div class="uk-navbar-center-left"><div>
					<ul class="uk-navbar-nav">
						<li><a href="#">Home</a></li>
						<li><a href="pages/our-company.php">Company</a></li>
					</ul>
				</div></div>
				<a href="#" class="uk-navbar-item uk-logo"><img id="logo" src="assets/img/logo-border.png"></a>
				<div class="uk-navbar-center-right"><div>
					<ul class="uk-navbar-nav">
						<li><a href="pages/our-products.php">Products</a></li>
						<li><a href="pages/locations.php">Locations</a></li>
					</ul>
				</div></div>
			</div>
		</nav>
	</div>

	<div class="uk-background-fixed"></div>

	<div class="uk-section">
		<div class="uk-inline">
		    <img src="assets/img/banner-new.png" alt="fruits">
		</div>
	</div>
	
	<section class="container">
		<div class="uk-child-width-expand@s" uk-grid>
			<div>
		        <div class="uk-card uk-card-default uk-card-small">
		            <div class="uk-card-media-top">
		                <img src="assets/img/company-preview-new.jpg" alt="">
		            </div>
		            <div class="uk-card-body uk-text-center">
		                <h3 class="uk-card-title">Our Company</h3>
		                <p>Know more about Kayumanggi Tropical Foods Inc.</p>
		            </div>
		            <div class="uk-card-footer">
				        <a class="uk-button uk-button-default uk-align-center" href="pages/our-company.php">Learn More</a>
				    </div>
				</div>
			</div>

			<div>
		        <div class="uk-card uk-card-default uk-card-small">
		            <div class="uk-card-media-top">
		                <img src="assets/img/our-products-new.jpg" alt="">
		            </div>
		            <div class="uk-card-body uk-text-center">
		                <h3 class="uk-card-title">Our Products</h3>
		                <p>Discover Kayumanggi’s full line of fruit preserves and food products.</p>
		            </div>
		            <div class="uk-card-footer">
				        <a class="uk-button uk-button-default uk-align-center" href="pages/our-products.php">Learn More</a>
				    </div>
				</div>
			</div>

			<div>
		        <div class="uk-card uk-card-default uk-card-small">
		            <div class="uk-card-media-top">
		                <img src="assets/img/alaminos-branch.jpg" alt="">
		            </div>
		            <div class="uk-card-body uk-text-center">
		                <h3 class="uk-card-title">Our Locations</h3>
		                <p>Know more about our store locations and contact us!</p>
		            </div>
		            <div class="uk-card-footer">
				        <a class="uk-button uk-button-default uk-align-center" href="pages/locations.php">Learn More</a>
				    </div>
				</div>
			</div>
		</div>
	</section>

	<div class="halohalo">
		<img class="uk-align-left@m" src="assets/img/halohalo-logo.png" width="280px" alt="Francisco's Halo Halo">
		<h1 class="uk-article-title">Francisco’s Halo Halo</h1>
		<p>Francisco’s Halo-halo is a Filipino dessert food stall that offers authentic Halo-Halo and various refreshments on-the-go with the aim of providing a taste of the Philippines’ finest fruit preserves mixed in a cup made right in front of its customer. With the presence of the Filipinos’ sweet tooth, Francisco’s envisions to cater authentic Filipino dessert that is on-the-go, accessible, and quality filled.</p>
		<p id="visit">Visit our page: <a href="http://www.facebook.com/FranciscosHaloHalo" target="_blank">www.facebook.com/FranciscosHaloHalo</a></p>
	</div>

	<!-- Footer -->
	<div class="footer">
		<h2>Contact Us!</h2>
		<p>
			<span uk-icon="icon: mail"></span> <a href="mailto:info@kayumanggifoods.com">info@kayumanggifoods.com</a><br>
			<span uk-icon="icon: receiver"></span> +6349 567 1973<br>
			<span uk-icon="icon: receiver"></span> (Fax) +6349 567 1199<br>
			<span uk-icon="icon: home"></span> 35 Maharlika Highway, Brgy. San Juan, Alaminos, Laguna, Philippines 4001
		</p>
	</div>

	<!-- UIkit JS -->
	<script type="text/javascript" src="js/uikit.min.js"></script>
	<script type="text/javascript" src="js/uikit-icons.min.js"></script>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>