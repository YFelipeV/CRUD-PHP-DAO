<?php

require_once "Dao/AlumnoDao.php";

$alumnoDao = new Dao\AlumnoDAO();
$listaAlumnos = $alumnoDao->ListarAlumno();
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<h1>Lista de Alumnos</h1>
<table class="table">
    <tr>
        <th>Código</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Curso</th>
        <th>Promedio</th>
        <th>Comentario</th>
        <th ><a class="btn btn-success" href="Views/Insert.php">Agregar</a></th>
    </tr>
    <?php foreach ($listaAlumnos as $alumno) { ?>
        <tr>
            <td><?php echo $alumno['codigoAlumno']; ?></td>
            <td><?php echo $alumno['nombreAlumno']; ?></td>
            <td><?php echo $alumno['apellidoAlumno']; ?></td>
            <td><?php echo $alumno['cursoAlumno']; ?></td>
            <td><?php echo $alumno['promedioAlumno']; ?></td>
            <td><?php echo $alumno['comentarioAlumno']; ?></td>
            <td><a class="btn btn-warning" href="./Views/Update.php?id=<?=$alumno['codigoAlumno'] ?>">Editar</a></td>
            <td><a class="btn btn-danger" href="./Views/delete.php?id=<?=$alumno['codigoAlumno'] ?>">Elimnar</a></td>


        </tr>
    <?php } ?>
</table>
</body>
</html>