<?php
require_once 'model/login.model.php';
require_once 'model/log.model.php';
class login
{
    private $model;
    private $security;
    private $log_;
    public function __construct()
    {
        $this->security = new database();
        $this->model = new login_model();
        $this->log_ = new log_model();
    }

    public function index()
    {
        $tittle = "Natillera-login";
        require_once HTML_DIR . 'overall/header.html';
        require_once HTML_DIR . 'usuario/login.html';
        // require_once HTML_DIR . 'overall/modal.html';
        require_once HTML_DIR . 'overall/footer.html';
    }

    public function validacion()
    {
        $usuario = $this->security->protect($_POST['user']);
        $password = $this->security->protect($_POST['password']);
        if ($usuario != '' && $password != '') {
            $data = $this->model->login($usuario, $password);
            if ($data[0] == 4) {
                $user_agent = $_SERVER['HTTP_USER_AGENT'];
                print ($_SERVER["REMOTE_ADDR"]);
                print $this->log_->so($user_agent);
                $this->log_->log($data[1],'Inicio de sesion',$this->log_->so($user_agent),$_SERVER["REMOTE_ADDR"]);
                
                 $this->index();
                echo "<script> Login('success'); </script>";
                // $_SESSION['Nombre'] = $data[1];
                // $_SESSION['rol'] = $data[2];
            }elseif ($data[0] == 5) {
                $this->index();
                echo "<script> Login('password'); </script>";
            } elseif ($data[0] == 6) {
                $this->index();
                echo "<script> Login('email'); </script>";
            }
            
        }
        
    }
}
