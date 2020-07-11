<?php

class admin
{
    public function __construct()
    {
    }

    public function index()
    {
        $tittle = "natillera-" . $_SESSION["nombre"];
        $ip = $_SERVER["REMOTE_ADDR"];
       
        if ($_SESSION["rol"] == "1") {
            
            require_once HTML_DIR . 'overall/header.html';
            require_once HTML_DIR. 'overall/footer.html';
            require_once HTML_DIR . 'admin/home.html';

        }
    }
}