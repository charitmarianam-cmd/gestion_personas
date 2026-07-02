<?php

class Persona
{
    public $nombre;
    public $apellido;
    public $edad;
    public $correo;

    public function saludar()
    {
        return "Hola, mi nombre es: " . $this->nombre . " " . $this->apellido . "<br>" . "Mi edad es: " . $this->edad . "<br>" . "Mi correo es: " . $this->correo;
    }
}

?>