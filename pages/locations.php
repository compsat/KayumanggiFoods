<?php
	$errName = '';
	$errEmail = '';
	$errSubject = '';
	$errMessage = '';
	$result = '';
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["submit"])) {
		// Sanitize inputs
		$name = htmlspecialchars(trim($_POST['name']));
		$email_from = filter_var(trim($_POST['email_from']), FILTER_SANITIZE_EMAIL);
		$message = htmlspecialchars(trim($_POST['message']));
		$subject = htmlspecialchars(trim($_POST['subject']));

		$from = 'Kayumanggi Foods Contact Form'; 
		$to = 'info@kayumanggifoods.com'; 
		
		$body = "From: $name\n E-Mail: $email_from\n Message:\n $message";

		// Check if name has been entered
		if (empty($name)) {
			$errName = 'Please enter your name.';
		}
		
		// Check if email has been entered and is valid
		if (empty($email_from) || !filter_var($email_from, FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address.';
		}

		//Check if subject has been entered
		if (empty($subject)) {
			$errSubject = 'Please enter a subject.';
		}
		
		//Check if message has been entered
		if (empty($message)) {
			$errMessage = 'Please enter your message.';
		}

		// Prevent header injection
		if (preg_match("/[\r\n]/", $name) || preg_match("/[\r\n]/", $email_from) || preg_match("/[\r\n]/", $subject)) {
			die('Header injection detected.');
		}

		// If there are no errors, send the email
		if ($errName == '' && $errEmail == '' && $errMessage == '') {
			if (mail($to, $subject, $body, "From: $from <$email_from>")) {
				$result='<div class="uk-alert-success" uk-alert>Thank you for contacting us! We will be in touch with you very soon.</div>';
			} else {
				$result='<div class="uk-alert-warning" uk-alert>Sorry! There was an error sending your message. Please try again.</div>';
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Kayumanggi Foods</title>

	<!-- UIkit CSS -->
	<link rel="stylesheet" href="../css/uikit.min.css"/>
	<link rel="stylesheet" href="../css/styles.css"/>
</head>

<body>
	<!-- NAVBAR -->
	<div id="navbar-frame"></div>

	<!-- BANNER 1 -->
	<div class="banner">
		<h1>Our Locations</h1>
	</div>

	<!-- LOCATIONS -->
	<section class="wrapper">
		<div class="uk-child-width-1-2@s" uk-grid uk-height-match="target: > div > .uk-card">

			<div class="location-card">
		        <div class="uk-card uk-card-default uk-card-small uk-width-large">
		            <div class="uk-card-media-top">
		                <img src="../assets/img/alaminos-branch.jpg" alt="">
		            </div>
		            <div class="uk-card-body">
		                <h3 class="uk-card-title">Alaminos, Laguna Branch</h3>
		                <p>35 Maharlika Highway, Brgy. San Juan, Alaminos, Laguna, Philippines 4001</p>
		                <p>Tel.# +6349 567 1972</p>
		            </div>
		        </div>
	    	</div>

	    	<div class="location-card">
		        <div class="uk-card uk-card-default uk-card-small uk-width-large">
		            <div class="uk-card-media-top">
		                <img src="../assets/img/sanpablo-branch.jpg" alt="">
		            </div>
		            <div class="uk-card-body">
		                <h3 class="uk-card-title">Concepcion, San Pablo Branch</h3>
		                <p>Shell Gas Station, Corner Carmelite Rd., Brgy. Concepcion, San Pablo City, Laguna, Philippines 4001</p>
		            </div>
		        </div>
	    	</div>

		</div>
	</section>

	<!-- BANNER 2 -->
	<div id="message-banner" class="banner">
		<h1>Message Us!</h1>
	</div>

	<!-- MESSAGE -->
	<section class="wrapper">
		<div id="message-form">
	        <div class="uk-card uk-card-default uk-card-small uk-width-xxlarge">
	            <div class="uk-card-body">
	            	<?php echo $result; ?>	
	                <h2>Leave a message:</h2>
	                <form class="uk-grid-small" uk-grid role="form" method="post" action="locations.php">
	                	<div class="uk-width-1-4@s">
	                		<h4>Name:</h4>
	                	</div>
	                	<div class="uk-width-3-4@s">
	                		<input class="uk-input" type="text" name="name" placeholder="">
	                		<p class='uk-text-danger'><?php echo htmlspecialchars($errName);?></p>
	                	</div>
	                	<div class="uk-width-1-4@s">
	                		<h4>Email Address:</h4>
	                	</div>
	                	<div class="uk-width-3-4@s">
	                		<input class="uk-input" type="text" name="email_from" placeholder="">
							<p class='uk-text-danger'><?php echo htmlspecialchars($errEmail);?></p>
	                	</div>
	                	<div class="uk-width-1-4@s">
	                		<h4>Subject:</h4>
	                	</div>
	                	<div class="uk-width-3-4@s">
	                		<input class="uk-input" type="text" name="subject" placeholder="">
							<p class='uk-text-danger'><?php echo htmlspecialchars($errSubject);?></p>
	                	</div>
	                	<div class="uk-width-1-4@s">
	                		<h4>Message:</h4>
	                	</div>
	                	<div class="uk-width-3-4@s">
	                		<textarea class="uk-textarea" id="message-us" name="message"></textarea>
							<p class='uk-text-danger'><?php echo htmlspecialchars($errMessage);?></p>
                		</div>
                		<div class="uk-width-4-4@s">
	                		<button class="uk-button uk-button-default uk-align-right" name="submit">Submit</button>
	                	</div>
	                </form>
	                
	            </div>
	        </div>
    	</div>
	</section>

	<!-- FOOTER -->
	<div id="footer-frame"></div>

	<!-- UIkit JS -->
	<script type="text/javascript" src="../js/uikit.min.js"></script>
	<script type="text/javascript" src="../js/uikit-icons.min.js"></script>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>