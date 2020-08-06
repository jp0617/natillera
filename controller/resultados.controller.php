<?php
class resultados{
    public function index(){
        $tittle="Resultados";
        require_once HTML_DIR ."overall/header.html";
        require_once HTML_DIR."admin/home.html"; 
        require_once HTML_DIR."admin/resultados.html";
        require_once HTML_DIR."overall/footer.html";
    }
}