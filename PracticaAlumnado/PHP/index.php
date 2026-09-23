<?php


include "conexion.php";
echo("La conexion fue realizada correctamente")

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alumnado ESO</title>
</head>

<body>

    <h1>Matricular alumno</h1>

    <form action="insertar.php" method="POST">

        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <br><br>

        <label>Apellidos:</label>
        <input type="text" name="apellidos" required>

        <br><br>

        <label>Fecha de nacimiento:</label>
        <input type="date" name="fechaNacimiento" required>

        <br><br>

        <label>Curso:</label>
        <select name="curso" required>
            <option value="1">1º ESO</option>
            <option value="2">2º ESO</option>
            <option value="3">3º ESO</option>
            <option value="4">4º ESO</option>
        </select>

        <br><br>

        <label>Email:</label>
        <input type="email" name="email" required>

        <br><br>

        <label>Contraseña:</label>
        <input type="password" name="contrasena" required>

        <br><br>

        <button type="submit">Matricular alumno</button>

    </form>

</body>
</html>