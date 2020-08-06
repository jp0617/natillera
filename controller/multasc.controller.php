<?php
class MultasC{
    public function index(){
        $tittle="Multa-Coutas";
        require_once HTML_DIR ."overall/header.html";
        require_once HTML_DIR."admin/home.html"; 
        require_once HTML_DIR."admin/MultaC.html";
        require_once HTML_DIR."overall/footer.html";
    }
}