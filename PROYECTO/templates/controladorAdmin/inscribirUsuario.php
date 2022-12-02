<?php
//Verificar si los canpos son enviados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $idusuario = $_POST['usuario'];
    $idMateria = $_POST['nrc'];

    //Agregar estatico
    $nota1 = 0;
    $nota2 = 0;
    $nota3 = 0;

    $comparar = "SELECT * FROM notas WHERE idUsuario=$idusuario AND idMateria=$idMateria";
    $resultadosC = mysqli_query($conn, $comparar) or die(mysqli_connect_errno());

    $fila = mysqli_fetch_array($resultadosC);

    if (isset($fila)) {
    } else {
        $consultaN1 = "INSERT INTO notas(idUsuario,idMateria, nota1, nota2, nota3)
    VALUES('$idusuario', '$idMateria', '$nota1', '$nota2', '$nota3')";
        $resultadoN1 = mysqli_query($conn, $consultaN1);

        if ($resultado) {
            header("Location: inicio.php");
        }
        $conn->close();
    }
}
