<?php
session_start();
require 'database/database.php';
require 'controller/core.php';

function index($controller)
{
    require_once "controller/$controller" . ".controller.php";
    $controller = ucwords($controller);
    $controller = new $controller;
    $controller->index();
}

if (isset($_POST['user']) && isset($_POST['password'])) {
    $login = "login";
    require_once "controller/$login" . ".controller.php";
    $login = ucwords($login);
    $login = new $login;
    $login->validacion();
} else if (!isset($_SESSION['ema'])) {
    index("login");
}
if (isset($_SESSION['ema']) && isset($_REQUEST['c'])) {
    $controller = strtolower($_REQUEST['c']);
    $accion     = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    require_once "controller/$controller" . ".controller.php";
    $controller = ucwords($controller);
    $controller = new $controller;
    call_user_func(array($controller, $accion));
} else if (isset($_SESSION['ema']) && !isset($_REQUEST['c'])) {
    index("summary");
}
?>