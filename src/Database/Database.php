<?php
namespace App\Database;

use PDO;
use PDOStatement;
use PDOException;

class Database
{
	private static ?Database $instance = null;
	private PDO $pdo;

	private function __construct(array $config)
	{
		$driver = $config['driver'];
		$host = $config['host'];
		$port = $config['port'];
		$database = $config['database'];
		$username = $config['username'];
		$password = $config['password'];
		$charset = $config['charset'];
		$options = $config['options'] ?? [];
		$dsn = "$driver:host=$host;port=$port;dbname=$database;charset=$charset";

		$this->pdo = new PDO($dsn, $username, $password, $options);
	}

	public static function getInsatance(array $config): Database
	{
		if (self::$instance === null) {
			if (empty($config)) {
				throw new RunTimeException("Database configuration is required for the first instantiation.");
			}
			self::$instance = new Database($config);
		}
		return self::$instance;
	}

	public function getConnection(): PDO
	{
		return $this->pdo;
	}

}
