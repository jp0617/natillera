<?php
class MultasP{
    public function index(){
        $tittle="Multa Pollas";
        require_once HTML_DIR ."overall/header.html";
        require_once HTML_DIR."admin/home.html"; 
        require_once HTML_DIR."admin/MultaPollas.html";
        require_once HTML_DIR."overall/footer.html";
    }
}