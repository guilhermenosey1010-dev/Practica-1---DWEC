<?php

include "conexion.php";
echo("La conexion fue realizada correctamente");

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$fechaNacimiento = $_POST["fechaNacimiento"];
$curso = $_POST["curso"];
$email = $_POST["email"];
$contrasena = $_POST["contrasena"];

$resultado = mysqli_query($conexion, "SELECT COUNT(*) AS total FROM alumnos WHERE curso = '$curso'");
$fila = mysqli_fetch_assoc($resultado);
$totalAlumnos = $fila["total"];

if ($totalAlumnos >= 25) {
    echo "No se puede matricular, el curso ya tiene 25 alumnos.";
} else {
    $sql = "INSERT INTO alumnos (nombre, apellidos, fecha_nacimiento, curso, email, contrasena) 
        VALUES ('$nombre', '$apellidos', '$fechaNacimiento', '$curso', '$email', '$contrasena')";

    $resultadoInsert = mysqli_query($conexion, $sql);

    if ($resultadoInsert) {
        echo "Alumno matriculado correctamente.";
    } else {
        echo "Error al matricular: " . mysqli_error($conexion);
    }
}

mysqli_close($conexion);

?>