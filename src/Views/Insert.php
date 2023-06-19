<?php

require_once "../Connection/DbConnection.php";
require_once __DIR__ . '/../Dao/AlumnoDao.php';
require_once __DIR__ . '/../Objects/Alumno.php';

$conn = new Connection\dbConnection();
$conn->openConnection();


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nombre = $_POST["nombreAlumno"];
    $apellido = $_POST["apellidoAlumno"];
    $curso = $_POST["cursoAlumno"];
    $promedio = $_POST["promedioAlumno"];
    $comentario = $_POST["comentarioAlumno"];

    if (empty($nombre) || empty($apellido) || empty($curso) || empty($promedio) || $comentario) {
        echo "Porfavor, complete todos los campos";
    } else {
        $alumno = new Objects\Alumno(null, $nombre, $apellido, $curso, $promedio, $comentario);
        $alumnoDao = new Dao\AlumnoDAO();
        $alumnoDao->AgregarAlumno($alumno);
        header("Location:../index.php");
        exit;
    }


}


?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Agregar Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body class="container">
<h2>Formulario Agregar Alumno</h2>
<form method="POST" action="insert.php">

    <label for="nombre">Nombre:</label>
    <input class="form-control" type="text" id="nombre" name="nombreAlumno"><br>

    <label for="apellido">Apellido:</label>
    <input class="form-control" type="text" id="apellido" name="apellidoAlumno"><br>

    <label for="curso">Curso:</label>
    <input class="form-control" type="text" id="curso" name="cursoAlumno"><br>

    <label for="promedio">Promedio:</label>
    <input class="form-control" type="text" id="promedio" name="promedioAlumno"><br>

    <label for="comentario">Comentario:</label>
    <input class="form-control" type="text" id="comentario" name="comentarioAlumno"><br>

    <button class="btn btn-success w-100" type="submit">Agregar Alumno</button>
</form>
</body>
</html>