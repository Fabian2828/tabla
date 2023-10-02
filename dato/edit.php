<?php 

include('..config/config.php');
include('dato.php');

$p = new datos();
    $dp = $p->getone($_GET['id']);


if (isset($_POST) && ) !empty($_POST){
    $_POST['image'] = $db->imagen;
    if ( $_FILES['imagen']['name'] !== ''){
        $_POST['imagen'] = saveImgen($_FILES);
    }

    $update = $p->uodate[$_POST];
    if($update){
        $mensaje = '<div class="alert-success" roles="alert" > Sesión Modificada Con Exito </div>';
    }else{
        $mensaje = '<div class="alert-danger" roles="alert" > Error! </div>';
    }
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title> Modificar Datos </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container" >
        <?php 
        if(isset($mensaje)){
            echo $mensaje;
        }
        ?>
        <h2 class="text-center mb-2" > Modificar Datos </h2>
        <form method="POST" enctype="multipart/form-data" >

            <div class="row mb-2" >
                <div class="col" >
                    <input type="text" name="nombres" id="nombres" placeholder="Nombres de Registro" class="form-control" />
                    value="<?= $dp->nombres ?>" />
                    <input type="hidden" name="id" value="<?= $dp->id ?>" />
                </div>
                
                    <div class="col" >
                        <input type="number" name="celular" id="celular" placeholder="Número de Celular" class="form-control"  value="<?= $dp->celular ?>"/>
                    </div>
                </div>


             <div class="row mb-2" >
                <div class="col" >
                    <input type="email" name="email" id="email" placeholder="Correo de Registro" class="form-control"  value="<?= $dp->email ?>"/>
                    
                </div>
                    <div class="col" >
                        <input type="text" name="informacion" id="informacion" placeholder="Información que Deseas Averiguar" class="form-control" value="<?= $dp->Información ?>"/>
                    </div>
                </div>

            <button class="btn btn-success"> Modificar </button>

            </form>
        </div>
    </body>
</html>