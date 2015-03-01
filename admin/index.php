<?php

require '../db.php';

$conn = connect($config);
if ( !$conn ) die('Problem connecting to the db.');

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	$name = $_POST['name'];
	$date_of_birth = $_POST['date'];
	$nationality = $_POST['nationality'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$profile = $_POST['profile'];

	if ( empty($name) || empty($date_of_birth) || empty($nationality) || empty($address) || empty($phone) || empty($email) || empty($profile)) {
		$status = 'Please fillout all the inputs.';
	} else {
		// update the table row
		query(
		"UPDATE about_me SET name=:name, date_of_birth=:date_of_birth, nationality=:nationality, address=:address, phone=:phone, email=:email, profile=:profile WHERE id = 1",
		array('name' => $name, 'date_of_birth' => $date_of_birth, 'nationality' => $nationality, 'address' => $address, 'phone' => $phone, 'email' => $email, 'profile' => $profile),
		$conn);
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<style>
	.container { width: 600px; margin: auto; }
	form ul { padding: 0; }
	form li { list-style: none; }
	form input, form textarea { margin-bottom: 1.5em; width: 100%; }
	form input[type = submit] { width: auto;}
	form textarea { height: 300px; }
	label { display: block; }
	</style>
</head>
<body>
<div class="container">	
	<h1>Edit personal details</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="name">Name:</label>
				<input type="text" name="name" id="name">
			</li>

			<li>
				<label for="date_of_birth">Date of birth:</label>
				<input type="date" name="date" id="date_of_birth">
			</li>

			<li>
				<label for="nationality">Nationality:</label>
				<input type="text" name="nationality" id="nationality">
			</li>

			<li>
				<label for="address">Address:</label>
				<input type="text" name="address" id="address">
			</li>

			<li>
				<label for="phone">Phone:</label>
				<input type="tel" name="phone" id="phone">
			</li>

			<li>
				<label for="email">Email:</label>
				<input type="email" name="email" id="email">
			</li>

			<li>
				<label for="profile">Professional profile:</label>
				<textarea name="profile" id="profile"></textarea>
			</li>

			<li>
				<input type="submit">
			</li>
		</ul>
		
		<?php if ( isset($status) ) : ?>
			<p><?= $status; ?></p>
		<?php endif; ?>
	</form>
</div>
</body>
</html>