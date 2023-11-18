<?php

include("conexion.php");
function insertar($cod, $nom, $cic, $nc)
{
    global $cn;
    $sql = "INSERT INTO tcurso(CodCur, NomCur, Ciclo, NumCre) VALUES ('".$cod."','".$nom."','".$cic."','".$nc."')";

    if (mysqli_query($cn, $sql)) {
        return "Datos registrados satisfactoriamente!";
    } else {
        return "ERROR...Datos no registrados";
    }
}
function getCursos() {
    global $cn;
    $sql = "SELECT * FROM tcurso";
    return mysqli_query($cn, $sql);
}

function consultarCurso($idC) {
    global $cn;
    $sql = "SELECT * FROM tcurso WHERE id='".$idC."'";
    return mysqli_query($cn, $sql);
}

function modificar( $id, $cod, $nom, $cic, $numc) {
    global $cn;
    $sql = "UPDATE tcurso SET CodCur='".$cod."',NomCur='".$nom."',Ciclo='".$cic."',
    NumCre='".$numc."' WHERE id='".$id."' ";

    if (mysqli_query( $cn, $sql)) {
        return "Se modifico los datos satisfactoriamente!";
    } else {
        return "ERROR...Datos no actualizados";
    }
}

function eliminarCursos($id) {
    global $cn;
    $sql = "DELETE FROM tcurso WHERE id='".$id."'";
    if (mysqli_query($cn, $sql)) {
        return "Curso eliminado satisfactoriamente!";
    } else {
        return "ERROR...Curso no eliminado";
    }
}

?>