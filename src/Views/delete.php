<?php
require_once __DIR__."/../Dao/AlumnoDao.php";
require_once __DIR__."/../Objects/Alumno.php";

echo var_dump($_GET["id"]);
if(isset($_GET["id"])){
    $alumnoId=$_GET["id"];

}else{
    header("Location:../index.php");
    exit;
}

$alumnoDao=new Dao\AlumnoDAO();
$alumnoDao->EliminarAlumno($alumnoId);
header("Location : ../index.php");