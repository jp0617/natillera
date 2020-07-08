<?php
require_once 'model/login.model.php';
class login
{
    private $model;
    private $security;
    public function __construct()
    {
        $this->security = new database();
        $this->model = new login_model();
    }

    public function index(){
        $tittle = "Natillera-login";
        require_once HTML_DIR . 'overall/header.html';
        require_once HTML_DIR . 'usuario/login.html';
        // require_once HTML_DIR . 'overall/modal.php';
        // require_once HTML_DIR . 'overall/footer_login.php';
    }
}
