<?php

require __DIR__ . "/vendor/autoload.php";

include __DIR__ . "/src/App/functions.php";

use Framework\Database;
use Dotenv\Dotenv;
use App\Config\Paths;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$db = new Database($_ENV['DB_DRIVER'], [
    'host' => $_ENV['DB_HOST'],
    'port' => $_ENV['DB_PORT'],
    'dbname' => $_ENV['DB_NAME'],
], $_ENV['DB_USER'], $_ENV['DB_PASS']);
$sqlFile = file_get_contents("./database.sql");

$db->query($sqlFile);







