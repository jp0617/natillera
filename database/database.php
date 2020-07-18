<?php
class database{
    public static function getconnection(){
        $conn= new mysqli('localhost','root','qQ12345678','dboNatillera');
        $conn->query("set names 'utf8'");
        if ($conn->connect_error) {
            die('no se pudo conectar a la base de datos' . $conn->connect_error);
        } else {
            return $conn;
        }
    }

    public function protect($v){
        $conn= new mysqli('localhost','root','qQ12345678','dboNatillera');
        $v=mysqli_real_escape_string($conn,$v);
        $v=htmlentities($v,ENT_QUOTES);
        $v=trim($v);
        return $v;
    }
}