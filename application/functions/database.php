<?php

$database = getenv('MYSQL_DATABASE');
$password = getenv('MYSQL_PASSWORD');
$user = getenv('MYSQL_USER');

try {
	$pdo = new PDO(
		"mysql:host=database:3306;dbname=$database",
		$user,
		$password,
	);
} catch (PDOException $e) {
	print "Error!: " . $e->getMessage() . "<br/>";
	die();
}
