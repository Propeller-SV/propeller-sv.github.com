<?php

require 'db.php';

//  Connect to db
$conn = connect($config);
if ( !$conn ) die('Problem connecting to the db.');

// Fetch all the pages
$pages = query('SELECT * FROM pages WHERE id = :id LIMIT 1',
				array ('id' => $_GET['id']),
				$conn)[0];

print_r($pages);
// Filter through and display in the view
// $view_path = 'views/single.view.php';
// include 'inc/header.php';