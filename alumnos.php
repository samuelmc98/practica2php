<?php

require_once 'persona.php';

    class Alumnos extends Persona{

        private $id_alumno;
        
        public function __construct($id_alumno){

            $this->id_alumno=$id_alumno;
        }

        /**
         * Get the value of id_alumno
         */ 
        public function getId_alumno()
        {
                return $this->id_alumno;
        }

        /**
         * Set the value of id_alumno
         *
         * @return  self
         */ 
        public function setId_alumno($id_alumno)
        {
                $this->id_alumno = $id_alumno;

                return $this;
        }
    }