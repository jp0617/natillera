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

if (isset($_POST['ema']) && isset($_POST['pas'])) {
    $login = "login";
    require_once "controller/$login" . ".controller.php";
    $login = ucwords($login) . '.controller';
    $login = new $login;
    $login->validacion();
} else if (!isset($_SESSION['ema'])) {
    index("login");
}

?>