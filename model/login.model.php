<?php

class login_model
{
    private $DB;
    private $user;

    public function __construct()
    {
        $this->DB = database::getconnection();
        $this->user = array();
    }

    public function login($user, $pass)
    {

        $query = $this->DB->query("call spLogin('" . $user . "')");
        $fila  = $query->fetch_assoc();
        if (!empty($fila)) {
            if ($fila["password"] == md5(md5($pass))) {
                $array[0]=4;
                $array[1]=$fila["nombre"]." ".$fila["apellido"];
                $array[2]=$fila["rol"];
            }else {
                $array[0] = 5; //Usuario valido, contraseña incorrecta
                
            }
        } else {
            $array[0] = 6; //Usuario no existe
            
        }
        
        return $array;
    }
}
