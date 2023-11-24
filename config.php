<?php

$envFile = __DIR__ . '/.env';
if (file_exists($envFile)) {
  $envVariables = parse_ini_file($envFile);
  foreach ($envVariables as $key => $value) {
    $_ENV[$key] = $value;
    putenv("$key=$value");
  }
}
$servername = $_ENV['SERVERNAME'];
$username = $_ENV['USERNAME'];
$password = $_ENV['PASSWORD'];
$database = $_ENV['DATABASE'];


$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_errno) {
  echo "Failed to connect to MySQL: " . $connection->connect_error;
  exit();
}
