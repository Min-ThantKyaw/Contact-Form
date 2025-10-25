<?php
//Project root directory
require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;
use App\Database\Database;

// Load environment variables from .env file
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

//Initialize Database connection
$dbConfig = require __DIR__ . '/config/database.php';
$db = Database::getInsatance($dbConfig);