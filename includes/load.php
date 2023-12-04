<?php
require_once str_replace('\includes', "", __DIR__ . '\vendor\autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(str_replace('\\includes', '', __DIR__));
$dotenv->load();
?>