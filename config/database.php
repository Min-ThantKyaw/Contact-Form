<?php
return [
	'driver' => $_ENV['DB_DRIVER'],
	'host' => $_ENV['DB_HOST'],
	'port' => $_ENV['DB_PORT'],
	'database' => $_ENV['DB_NAME'],
	'username' => $_ENV['DB_USERNAME'],
	'password' => $_ENV['DB_PASSWORD'],
	'charset' => 'utf8mb4',
	'options' => [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES => false,
	],
];