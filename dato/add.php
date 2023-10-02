<?php 

include_once('../config/config.php');
include('dato.php');

if ( isset($_POST) && !empty($_POST) ){
    $p = new dato();
      
$save = $p->save($_POST);
if ($save){
    $mensaje = '<div class="alert alert-success" > Sesión Registrada </div>';
}else{
    $mensaje = '<div class="alert alert-danger" > Error al Registrar! </div>'; 
}
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title> Registrar Datos </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container" >
        <?php 
        if(isset($mensaje)){
            echo $mensaje;
        }
        ?>
        <h2 class="text-center mb-2" > Registrar Datos </h2>
        <form method="POST" enctype="multipart/form-data" >

            <div class="row mb-2" >
                <div class="col" >
                    <input type="text" name="nombres" id="nombres" placeholder="Nombres de Registro" class="form-control" />
                    </div>
                    <div class="col" >
                        <input type="number" name="celular" id="celular" placeholder="Número de Celular" class="form-control" />
                    </div>
                </div>


             <div class="row mb-2" >
                <div class="col" >
                    <input type="email" name="email" id="email" placeholder="Correo de Registro" class="form-control" />
                    </div>
                    <div class="col" >
                        <input type="text" name="informacion" id="informacion" placeholder="Información que Deseas Averiguar" class="form-control" />
                    </div>
                </div>

            <button class="btn btn-success"> Enviar Información </button>

            </form>
        </div>
    </body>
</html>