<?php
require_once __DIR__."/../Dao/AlumnoDao.php";
require_once __DIR__."/../Objects/Alumno.php";


$message="";
echo var_dump($_GET["id"]);
if(isset($_GET["id"])){
    $alumnoId=$_GET["id"];

}else{
header("Location:../index.php");
exit;
}

$alumnoDao=new Dao\AlumnoDAO();
$alumno=$alumnoDao->ListarAlumnoId($alumnoId);


if(!$alumno){
    header("Location:../index.php");
    exit;

}
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nombre = $_POST["nombreAlumno"];
    $apellido = $_POST["apellidoAlumno"];
    $curso = $_POST["cursoAlumno"];
    $promedio = $_POST["promedioAlumno"];
    $comentario = $_POST["comentarioAlumno"];

    if (empty($nombre) || empty($apellido) || empty($curso) || empty($promedio) || empty( $comentario)) {
        echo "Porfavor, complete todos los campos";
    } else {
        $alumno->setNombreAlumno($nombre);
        $alumno->setApellidoAlumno($apellido);
        $alumno->setCursoAlumno($curso);
        $alumno->setPromedioAlumno($promedio);
        $alumno->setComentarioAlumno($comentario);
        $alumnoDao->editarAlumno($alumno);

        header("Location:../index.php");
        exit;
    }


}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body class="container">
<h1>ACTUALIZANDO ALUMNO</h1>

<form method="POST" action="update.php?id=<?php echo $alumnoId; ?>">
    <label for="nombre">Nombre:</label>
    <input class="form-control" type="text" id="nombre" name="nombreAlumno" value="<?php echo $alumno->getNombreAlumno(); ?>"><br>

    <label for="apellido">Apellido:</label>
    <input class="form-control" type="text" id="apellido" name="apellidoAlumno" value="<?php echo $alumno->getApellidoAlumno(); ?>"><br>

    <label for="curso">Curso:</label>
    <input class="form-control" type="text" id="curso" name="cursoAlumno" value="<?php echo $alumno->getCursoAlumno(); ?>"><br>

    <label for="promedio">Promedio:</label>
    <input class="form-control" type="text" id="promedio" name="promedioAlumno" value="<?php echo $alumno->getPromedioAlumno(); ?>"><br>

    <label for="comentario">Comentario:</label>
    <input class="form-control"  type="text" id="comentario" name="comentarioAlumno" value="<?php echo $alumno->getComentarioAlumno(); ?>"><br>

    <!-- Resto del formulario -->

    <button type="submit" class="btn btn-success w-100">Actualizar Alumno</button>
</form>
</body>
</html>



