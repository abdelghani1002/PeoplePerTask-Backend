<?php
require 'load.php';

$conn = mysqli_connect($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], $_ENV['DB_NAME']);

if (!$conn)
    die("Connection to database faild: " . mysqli_connect_error());

