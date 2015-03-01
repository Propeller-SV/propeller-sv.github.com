<?php
require 'inc/header.php'; 

// $headers = "From: $_POST['name']" . "\r\n" .
//     "Reply-To: $_POST['email']" . "\r\n" .
//     'X-Mailer: PHP/' . phpversion(); 

if ( isset ($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	if ( mail('grey.psv@gmail.com', htmlspecialchars($_POST['subject']), htmlspecialchars($_POST['message'])) ) {
		$status = "Thank you for your message.";
	};
};

?>
<div id="contactform">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center text-uppercase">
				<div class="headline">
					<h1>Contact</h1>
				</div>
			</div>
		</div>
		<div id="info" class="row">
			<div class="col-md-4">
				<h3 class="text-uppercase">Get in touch</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint tempora, autem cumque nemo enim!</p>
				<h3 class="text-uppercase">My address</h3>
				<ul class="list-unstyled">
					<li>
						<span class="glyphicon glyphicon-home"></span>
						1a Zhadova Street/Kremenchuk/Ukraine
					</li>
					<br>
					<li>
						<span class="glyphicon glyphicon-earphone"></span>
						(050) 184-1142
					</li>
					<br>
					<li>
					<span class="glyphicon glyphicon-envelope"></span>
						grey.psv@gmail.com
					</li>
				</ul>
				
				<h3 class="text-uppercase">I'm also on social networks</h3>
				
				<div class="social-media fixed">
					
					<a href="#" class="facebook-icon social-icon">
					    <i class="fa fa-facebook fa-2x"></i>
					</a>
					<a href="#" class="twitter-icon social-icon">
					    <i class="fa fa-twitter fa-2x"></i>
					</a>
					<a href="#" class="googleplus-icon social-icon">
					    <i class="fa fa-google-plus fa-2x"></i>
					</a>
					
				</div>

			</div>

			<div class="col-md-8">
				<h3 class="text-uppercase">Send a message</h3>
				<form action="contact.php" method="post">
					<div>
						<input type="text" class="form-control" name="name" placeholder="enter your full name here">
					</div>
					<br>
					<div>
						<input type="email" class="form-control" name="email" placeholder="your email adress">
					</div>
					<br>
					<div>
						<input type="text" class="form-control" name="subject" placeholder="subject">
					</div>
					<br>
					<div>
						<textarea class="form-control" name="message" rows="7" placeholder="message"></textarea>
					</div>
				<br>
				<button type="submit" class="btn btn-default">Send!</button>
				</form>
				<?php if (isset($status)) echo $status; ?>
			</div>
		</div>
	</div>
</div>

<?php require 'inc/footer.php'; ?>

