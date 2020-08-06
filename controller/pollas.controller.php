<?php
class pollas{
    public function index(){
        $tittle="Pollas";
        require_once HTML_DIR ."overall/header.html";
        require_once HTML_DIR."admin/home.html"; 
        require_once HTML_DIR."admin/pollas.html";
        require_once HTML_DIR."overall/footer.html";
    }
}