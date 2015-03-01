<?php

require 'db.php';

$conn = connect($config);
if ( !$conn ) die('Problem connecting to the db.');

$pages = get('pages', $conn);

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<title>Serhii Prokhorenko :: Versus Resume</title>

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

</head>
<body>
	<div class="wrapper">
		<div id="header">
			<div class="container">
				<div class="row">
					<!-- logo -->
					<div class="col-md-3">
						<div id="logo">
							<a href="index.php">Serhii Prokhorenko</a>
						</div>
					</div>
					<!-- end logo -->
					<!-- nav -->
					<div id="nav" class="col-md-9">
						<ul class="list-inline">
							<?php foreach ($pages as $page) : ?>
								<li>
									<a href="<?= $page['title']; ?>.php"><?= $page['title']; ?></a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
					<!-- end nav -->
				</div>
			</div>
			
			<hr>

		</div>
		<!-- end header -->



