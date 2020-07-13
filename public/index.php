<?php
require '../vendor/autoload.php';

$ROOT_DIR = dirname(dirname(__FILE__));
$dotenv = Dotenv\Dotenv::createImmutable($ROOT_DIR);

$dotenv->load();


include '../resources/views/list.php';