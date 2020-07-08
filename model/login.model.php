<?php

class login_model
{
    private $DB;
    private $User;

    public function __construct()
    {
        $this->DB = database::getconnection();
        $this->User = array();
    }

    public function login($user, $pass)
    {
        $query = $this->DB->query("select * from tblusers where strUser='" . $user . "'");
        $fila = $query->fetch_object();
        $array = json_decode(json_encode($fila), true);
        if (!empty($array)) {
            if ($array["password"] == md5(md5($pass))) {
                $user[] = $array["nombre"] . " " . $array["apellido"];
                $user[] = $array["rol"];
            } else {
                $user[] = 8;
                $user[] = "";
            }
        } else {
            $user[] = 9;
            $user[] = "";
        }
        return $user;
    }
}
