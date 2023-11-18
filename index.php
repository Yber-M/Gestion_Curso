<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
</head>

<body>
    <?php

    if (isset($_GET['m'])) {
        $m = $_GET['m'];
        echo '<script language="javascript"> alert("'.$m.'");</script>';
    }

    echo '<h1>Hola Mundo</h1>';
    echo '<a href="views/frmInsertar.php"> Registrar Curso </a><br>';
    echo '<a href="views/frmConsultar.php"> Lista de Cursos </a><br>';
    
    ?>
</body>

</html>