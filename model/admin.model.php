<?php

class admin_model
{
    private $DB;
    private $usuario;

    public function __construct()
    {
        $this->DB = database::getconnection();
        $this->usuario = array();
    }

    public function GetPayment()
    {
        $query = $this->DB->query("call spGetpayment()");
        while ($fila = $query->fetch_assoc()) {
            $this->usuario[] = $fila;
        }
        return $this->usuario;
    }

    public function SavePayment($id,$mes,$fecha,$couta){
        $query=$this->DB->query("call spSavePayment('".$id."','".$mes."','".$fecha."','".$couta."')");
        mysqli_query($this->DB,$query) or die("Ha ocurrido un error");
    }
}
