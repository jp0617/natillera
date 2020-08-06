<?php
class abonos{
    public function index(){
        $tittle="Abonos";
        require_once HTML_DIR ."overall/header.html";
        require_once HTML_DIR."admin/home.html"; 
        require_once HTML_DIR."abonos/abonos.html";
        require_once HTML_DIR."overall/footer.html";
    }
}