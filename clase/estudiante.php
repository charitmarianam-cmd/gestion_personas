<?php
require_once "persona.php";

class Estudiante extends Persona
{

public function saludar ()
{
    return "Hola, Mi nombre es: " . $this->nombre . " " . $this->apellido . "<br>" ."Mi Edad es: " . $this->edad . "<br>" ."Mi Correo es: " . $this->correo ."<br>" . "Y soy un estudiante";
}

}


?>