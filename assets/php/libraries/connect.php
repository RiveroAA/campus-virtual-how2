<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'campusbd');

class Conexion extends mysqli
{

     public $enlace;
     function __construct()
     {
          $this->enlace = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
     }
     function __destruct()
     {
          mysqli_close($this->enlace);
     }
    public function connectBd(){
     $this->enlace = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
     return $this->enlace;
     }
}

?>