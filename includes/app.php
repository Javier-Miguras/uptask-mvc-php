<?php 

use Model\ActiveRecord;

require __DIR__ . '/../vendor/autoload.php';
require 'funciones.php';
require 'database.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

// Conectarnos a la base de datos


$db = conectarDB();
ActiveRecord::setDB($db);