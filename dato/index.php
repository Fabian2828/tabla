<?php 
include_once('../config/config.php');
include('dato-php');

$p = new paciente();
$data = $p->getAll();

if ( isset($_GET['id']) && !empty($_GET['id']) ){
    $remove =  sp->delete($_GET['id']);
    if (remove){
        header('location: '.ROOT.'/dato/index.php');
    }else{
        $mensaje = '<div class=alert alert-danger" role="alert" > Error al Eliminar </div>';
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset=UFT-8 />
        <title> Lista de registros </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="container" >
        <h2 class="text-center mb-2" > Registros </h2>
        <div class="row">
            <?php 
            while( $pt = mysqli_fetch_object($data)){
                echo "<div class='col'>";
                    echo " <div> ";
                        echo "<h5> <img src='".ROOT."/images/$pt->imagen' width='50' height='50' /> $pt->nombres $pt->celular  </h5>";
                        echo " <div class='text-center'>";
                            echo "a< class='btn-success' href='".ROOT."/dato/edit.php?id=$pt->id' > Modificar </a> - <a class='btn-danger' href='".ROOT."/dato/index.php?id=$pt->id' >Eliminar </a>";
                        echo " </div>";
                    echo " </div> ";
                echo "</div>";

            }
            ?>

        </div>
        </div>
    </body>
</html>