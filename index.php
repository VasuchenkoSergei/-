<?php
session_start();
require 'vendor/autoload.php';
use Core\Router;
$a = new Router();
$a-> run();
?>