<?php

require 'inc/header.php'; 

$conn = connect($config);
if ( !$conn ) die('Problem connecting to the db.');

$items = get('about_me', $conn, 1);

?>

<!-- Content -->
<div id="personal-profile">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center text-uppercase">
				<div class="headline">
					<p>
						<span>Who am i?</span>
					</p>
					<h1>
						Personal details
					</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<img src="img/270x270.png" alt="My Photo">
			</div>
			<div class="col-md-4">
				<ul class="list-unstyled">
					<?php foreach($items as $item) : ?>
						<li>Name: <?= $item['name']; ?></li>
						<li>Date of birth: <?= $item['date_of_birth']; ?></li>
						<li>Nationality: <?= $item['nationality']; ?></li>
						<li>Address: <?= $item['address']; ?></li>
						<li>Phone: <?= $item['phone']; ?></li>
						<li>Email: <a href="mailto:<?= $item['email']; ?>">grey.psv@gmail.com</a></li>
				</ul>
			</div>
			<div class="col-md-5">
				<h3>Professional profile</h3>
					<p><?= $item['profile']; ?></p>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
<!-- end content -->

<?php require 'inc/footer.php'; ?>

