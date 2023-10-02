<?php 

include_once('../config/config.php');
include('../config/database.php');

class dato{

    public $conexion;

    function __construct()
    {
        $db = new database();
        $this->conexion = $db->connectTodatabase();
    }

    function save($params){
        $nombres = $params ['nombres'];
        $celular = $params ['celular'];
        $email = $params ['email'];
        $informacion = $params ['informacion'];
 
        $insert = " INSERT INTO datos VALUES (NULL, '$nombres', $celular, '$email', '$informacion') ";
        return mysqli_query($this->conexion, $insert);
    }  


    function getAll(){
        $sql = "SELEC * FROM datos";
        return mysqli_query($this->conexion, $sql)
    
    function getone($id)
    {
        $sql = "SELECT * FROM datos WHERE id = $id";
        return mysqli_query($this->conexion, $sql);
    }

    function update($params){
        $nombres = $params ['nombres'];
        $celular = $params ['celular'];
        $email = $params ['email'];
        $informacion = $params ['informacion'];

        $update = "UPDATE datos SET nombres='$nombres', celular=$celular, email='$email', informacion='$informacion' WHERE id = $id "; 

        return mysqli_query($this->conexion, $update);

    }

    function delete($id){
        $delete = " DELETE FROM datos WHERE id = $id ";
        return mysqli_query($this->conexion, $delete);
    }
    

}

?>