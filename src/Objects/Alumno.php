<?php


namespace Objects;
class Alumno
{
    private $codigoAlumno;
    private $nombreAlumno;
    private $apellidoAlumno;
    private $cursoAlumno;
    private $promedioAlumno;

    private $comentarioAlumno;
    public function  __construct($codigoAlumno,$nombreAlumno,$apellidoAlumno,$cursoAlumno,$promedioAlumno,$comentarioAlumno)
    {
        $this->codigoAlumno=$codigoAlumno;
        $this->nombreAlumno=$nombreAlumno;
        $this->apellidoAlumno=$apellidoAlumno;
        $this->cursoAlumno=$cursoAlumno;
        $this->promedioAlumno=$promedioAlumno;
        $this->comentarioAlumno=$comentarioAlumno;
    }

    /**
     * @return mixed
     */
    public function getCodigoAlumno()
    {
        return $this->codigoAlumno;
    }

    /**
     * @param mixed $codigoAlumno
     */
    public function setCodigoAlumno($codigoAlumno)
    {
        $this->codigoAlumno = $codigoAlumno;
    }

    /**
     * @return mixed
     */
    public function getNombreAlumno()
    {
        return $this->nombreAlumno;
    }

    /**
     * @param mixed $nombreAlumno
     */
    public function setNombreAlumno($nombreAlumno)
    {
        $this->nombreAlumno = $nombreAlumno;
    }

    /**
     * @return mixed
     */
    public function getApellidoAlumno()
    {
        return $this->apellidoAlumno;
    }

    /**
     * @param mixed $apellidoAlumno
     */
    public function setApellidoAlumno($apellidoAlumno)
    {
        $this->apellidoAlumno = $apellidoAlumno;
    }

    /**
     * @return mixed
     */
    public function getCursoAlumno()
    {
        return $this->cursoAlumno;
    }

    /**
     * @param mixed $cursoAlumno
     */
    public function setCursoAlumno($cursoAlumno)
    {
        $this->cursoAlumno = $cursoAlumno;
    }

    /**
     * @return mixed
     */
    public function getPromedioAlumno()
    {
        return $this->promedioAlumno;
    }

    /**
     * @param mixed $promedioAlumno
     */
    public function setPromedioAlumno($promedioAlumno)
    {
        $this->promedioAlumno = $promedioAlumno;
    }

    /**
     * @return mixed
     */
    public function getComentarioAlumno()
    {
        return $this->comentarioAlumno;
    }

    /**
     * @param mixed $comentarioAlumno
     */
    public function setComentarioAlumno($comentarioAlumno)
    {
        $this->comentarioAlumno = $comentarioAlumno;
    }


}