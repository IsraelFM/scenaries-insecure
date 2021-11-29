<?php
require_once('../functions/database.php');
require_once('../functions/common.php');

$username = $_GET['username'];
$password = $_GET['password'];

$statement = $pdo->prepare(
	"SELECT * FROM `users` WHERE `username` = '$username'"
);

if (!$statement->execute()) {
	echo "Erro ao buscar usuário:\n";
	print_r($statement->errorInfo());
	$pdo = null;
	exit;
}

if ($statement->rowCount() <= 0) {
	$pdo = null;
	response_header(
		false,
		'O usuário informado não existe'
	);
}

$statement = $pdo->prepare(
	"SELECT * FROM `users` WHERE `password` = '$password'"
);
$statement->execute();

if ($statement->rowCount() <= 0) {
	$pdo = null;
	response_header(
		false,
		'A senha informada está incorreta'
	);
}

$user = $statement->fetchObject();

$pdo = null;
response_header(
	true,
	'Login efetuado com sucesso',
	$user
);
