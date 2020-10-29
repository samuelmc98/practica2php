<?php

class Notas {
    private $Id_notas;
    private $nombre_asignatura;
    private $nota;

    function __construct() {

    }


    public function getId_notas()
    {
        return $this->Id_notas;
    }
    public function setId_notas($Id_notas)
    {
        $this->Id_notas = $Id_notas;

        return $this;
    }



    public function getNombre_asignatura()
    {
        return $this->nombre_asignatura;
    }

    public function setNombre_asignatura($nombre_asignatura)
    {
        $this->nombre_asignatura = $nombre_asignatura;

        return $this;
    }



    public function getNota()
    {
        return $this->nota;
    }

    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }
}