<?php

$config = array(
	'username' => 'root',
	'password' => '072534',
	'database' => 'PSV_CV'
);

function connect($config)
{
	try {
		$conn = new \PDO('mysql:host=localhost;dbname=' . $config['database'],
						$config['username'],
						$config['password']);

		$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

		return $conn;
	} catch(Exception $e) {
		return false;
	}
}

function get($tableName, $conn, $limit = 10)
{
	try {
		$result = $conn->query("SELECT * FROM $tableName LIMIT $limit");
		return ( $result->rowCount() > 0 )
			? $result
			: false;
	} catch(Exception $e) {
		return false;
	}
}

function query($query, $bindings, $conn)
{
	$stmt = $conn->prepare($query);
	return $stmt->execute($bindings);

}