<?php

require_once "persona.php";

class Estudiante extends Persona
{
    protected $programa;
    protected $semestre;

    public function __construct($nombre, $apellido, $edad, $correo, $programa,$semestre)
    {
        parent::__construct($nombre, $apellido, $edad, $correo);
        $this->programa = $programa;
          $this->semestre = $semestre;

    }

       public function saludar()
{
    return "Hola, Mi nombre es: " . $this->nombre . "<br>" . "Mi apellido es: " . $this->apellido . "<br>" . "Mi Edad es: " . $this->edad . "<br>" . "Mi Correo es: " . $this->correo . "<br>" . "Mi Programa es: " . $this->programa . "<br>"  . "Mi semestre es: " . $this->semestre . "<br>" . "Y soy un estudiante";
}
    }


?>