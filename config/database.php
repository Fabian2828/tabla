<?php 


/* esta clase nos permite hacer una conecxion con una base de datos  */
class database{
    public $host = 'localhost'; // servidor
    public $user = 'root'; // usuario de phpMyadmin
    public $pass = ''; //contraseña de phpMyadmin
    public $db = 'datos'; // base de datos
    public $conexion; 

    function connectTodatabase(){
        $this->conexcion = mysqli_connect( $this->host, $this->user, $this->pass, $this->db );
 
        if ( mysqli_connect_error() ){
           echo 'error de conexión' . mysqli_connect_error();
        }


        return $this->conexion;
    }
}

?>