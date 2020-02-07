<?php 

// Define local directory name

define('PATH', dirname(__FILE__));

// Requie autoload file

require_once(PATH.'/components/Autoload.php');

// Database configuration file

require_once(PATH.'/components/Database.conf.php');

$router = new Router();
$router->dispatch();


?>