<?php

class user
{
    public function index()
    {
        $tittle = "natillera-" . $_SESSION["nombre"];
        $ip = $_SERVER["REMOTE_ADDR"];



        require_once HTML_DIR . 'overall/header.html';
        require_once HTML_DIR . 'overall/footer.html';
        require_once HTML_DIR . 'user/home.html';
    }
}
