<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//on démarre les sessions
session_start();

//on require les models
require_once 'vendor/autoload.php';

//on require les namespaces
use App\Controller;

//on definie les constantes
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
define("LANG", (!empty($_POST['langue'])) ?  '/' . $_POST['langue'] : (!empty($_SESSION['langue']) ? '/' . $_SESSION['langue'] : ""));


//on gere le controller
Controller::Controller();
