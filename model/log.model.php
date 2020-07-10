<?php

class log_model
{
    private $DB;
    private $log;


    public function __construct()
    {
        $this->DB = database::getconnection();
        $this->log = array();
    }

    public function so($user_agent)
    {
        $plataformas = array(
            'Windows 10' => 'Windows NT 10.0+',
            'Windows 8.1' => 'Windows NT 6.3+',
            'Windows 8' => 'Windows NT 6.2+',
            'Windows 7' => 'Windows NT 6.1+',
            'Windows Vista' => 'Windows NT 6.0+',
            'Windows XP' => 'Windows NT 5.1+',
            'Windows 2003' => 'Windows NT 5.2+',
            'Windows' => 'Windows otros',
            'iPhone' => 'iPhone',
            'iPad' => 'iPad',
            'Mac OS X' => '(Mac OS X+)|(CFNetwork+)',
            'Mac otros' => 'Macintosh',
            'Android' => 'Android',
            'BlackBerry' => 'BlackBerry',
            'Linux' => 'Linux',
        );
        foreach ($plataformas as $plataforma => $pattern) {
            if (preg_match('/(?i)' . $pattern . '/', $user_agent))
                return $plataforma;
        }
        return 'Otras';
    }
    public function log($user, $action, $so,$ip)
    {
        $query = "call spLog('" . $user . "','" . $action . "','" . $so . "','".$ip."')";
        mysqli_query($this->DB,$query) or die('error \n' . mysqli_error($this->DB));
    }
}
