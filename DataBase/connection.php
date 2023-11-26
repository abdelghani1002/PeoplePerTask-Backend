<?php
require_once str_replace('\\DataBase', '', __DIR__) . '\vendor\autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(str_replace('\\DataBase', '', __DIR__));
$dotenv->load();

$conn = mysqli_connect($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], $_ENV['DB_NAME']);

if (!$conn)
    die("Connection to database faild: " . mysqli_connect_error());

