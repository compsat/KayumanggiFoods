<!-- Hidden on tablets and larger -->
<nav class="uk-navbar-container uk-hidden@m" uk-navbar="dropbar: true; dropbar-mode: push">
    <div class="uk-navbar-left">
    	<ul class="uk-navbar-nav">
    		<li>
    			<a class="uk-navbar-toggle" uk-navbar-toggle-icon href="#"></a>
	        	<div class="uk-navbar-dropdown">
	        	<ul class="uk-nav uk-navbar-dropdown-nav">
	        		<li><a href="../index.php">Home</a></li>
	        		<li><a href="our-company.php">Company</a></li>
	        		<li><a href="our-products.php">Products</a></li>
					<li><a href="locations.php">Locations</a></li>
	        	</ul>
	        	</div>
    		</li>
    	</ul>
    </div>
    <div class="uk-navbar-right">
    	<a href="../index.php" class="uk-navbar-item uk-logo"><img id="logo" src="../assets/img/logo-border.png"></a>
    </div>
</nav>

<!-- Visible on tablets and larger -->
<div class="uk-visible@m" uk-sticky="sel-target: .uk-navbar; cls-active: uk-navbar-sticky">
	<nav class="uk-navbar">
		<div class="uk-navbar-center">
			<div class="uk-navbar-center-left uk-visible@m"><div>
				<ul class="uk-navbar-nav">
		            <li><a href="../index.php">Home</a></li>
		            <li><a href="our-company.php">Company</a></li>
		        </ul>
			</div></div>
	        <a href="../index.php" class="uk-navbar-item uk-logo"><img id="logo" src="../assets/img/logo-border.png"></a>
	        <div class="uk-navbar-center-right uk-visible@m"><div>
	        	<ul class="uk-navbar-nav">
		        	<li><a href="our-products.php">Products</a></li>
		            <li><a href="locations.php">Locations</a></li>
		        </ul>
	        </div></div>
		</div>
	</nav>
</div>