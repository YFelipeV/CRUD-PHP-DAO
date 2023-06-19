<?php

namespace Dao;
use Objects\Alumno;
use Connection\dbConnection;

require_once (__DIR__ . "/../Connection/DbConnection.php");
require_once( __DIR__ . "/../Objects/Alumno.php");

class AlumnoDAO
{
    function AgregarAlumno(Alumno $oAlumno)
    {
        $db = new dbConnection();
        $conn = $db->openConnection();

        $codigo = $oAlumno->getCodigoAlumno();
        $nombre = $oAlumno->getNombreAlumno();
        $apellido = $oAlumno->getApellidoAlumno();
        $curso = $oAlumno->getCursoAlumno();
        $promedio = $oAlumno->getPromedioAlumno();
        $comentario = $oAlumno->getComentarioAlumno();

        $sql = "INSERT INTO alumno (codigoAlumno, nombreAlumno, apellidoAlumno, cursoAlumno, promedioAlumno, comentarioAlumno) 
            VALUES ('$codigo', '$nombre', '$apellido', '$curso', '$promedio', '$comentario')";

        if ($conn->query($sql) === TRUE) {
            echo "Alumno agregado correctamente.";
        } else {
            echo "Error al agregar el alumno: " . $conn->error;
        }

        $db->close_Connection();
    }
    function ListarAlumno()
    {
        $db = new dbConnection();
        $listaAlumno = $db->openConnection()->query("SELECT `alumno`.`codigoAlumno`,
            `alumno`.`nombreAlumno`,
            `alumno`.`apellidoAlumno`,
            `alumno`.`cursoAlumno`,
            `alumno`.`promedioAlumno`,
            `alumno`.`comentarioAlumno`
            FROM alumno"
        );
        $db->close_Connection();

        return $listaAlumno;
    }

    function ListarAlumnoId($alumnoId)
    {
        $db = new dbConnection();
        $conn = $db->openConnection();

        $result = $db->openConnection()->query("SELECT * FROM alumno WHERE codigoAlumno = '$alumnoId';");




        if ($result && $result->num_rows > 0) {
            $row=$result->fetch_assoc();

            $alumno=new Alumno(

                $row["codigoAlumno"],
                $row["nombreAlumno"],
                $row["apellidoAlumno"],
                $row["cursoAlumno"],
                $row["promedioAlumno"],
                $row["comentarioAlumno"]
            );
            $result->free();
            echo var_dump($result);
            return  $alumno;
        }else{
            echo "f";
            return null;
        }
        $db->close_Connection();


    }






    function EliminarAlumno($codigoAlumno)
    {
        $db = new dbConnection();
        $db->openConnection()->query("DELETE FROM alumno WHERE codigoAlumno=" . $codigoAlumno.";");
        $db->close_Connection();
    }
    function editarAlumno(Alumno $oAlumno)
    {
        $db = new dbConnection();
        $db->openConnection()->query("UPDATE alumno SET 
      `nombreAlumno`='" . $oAlumno->getNombreAlumno() . "',
      `apellidoAlumno`='" . $oAlumno->getApellidoAlumno() . "',
      `cursoAlumno`='" . $oAlumno->getCursoAlumno() . "',
      `promedioAlumno`=" . $oAlumno->getPromedioAlumno() . ",
      `comentarioAlumno`='" . $oAlumno->getComentarioAlumno() . "'
      WHERE `codigoAlumno`=" . $oAlumno->getCodigoAlumno() . ";"
        );
        echo var_dump($db);

        $db->close_Connection();
    }
}
