<?php
//date_default_timezone_set('UTC+02:00');
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
define('ROOT', dirname(__FILE__));
// 2. Подключение файлов системы
require_once(ROOT.'/includes/autoload.php');

$router = new Router();
$router->run();
?>  
