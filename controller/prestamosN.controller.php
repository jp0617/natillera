<?php
class prestamosN{
    public function index(){
        $tittle="Prestamos Nuevo";
        require_once HTML_DIR ."overall/header.html";
        require_once HTML_DIR."admin/home.html"; 
        require_once HTML_DIR."admin/prestamos.html";
        require_once HTML_DIR."overall/footer.html";
    }
}