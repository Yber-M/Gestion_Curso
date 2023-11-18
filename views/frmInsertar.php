<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Curso</title>
</head>

<body>

    <form method="post" action="../controllers/cursoController.php">

        Codigo : <input type="text" name="cod"> <br>
        Nombre : <input type="text" name="nom"> <br>
        Ciclo : <input type="text" name="cic"> <br>
        Número de Creditos : <input type="text" name="numCre"> <br>
        <input type="submit" name="btnRegistrar" value="Registrar Curso">
    </form>

</body>

</html>