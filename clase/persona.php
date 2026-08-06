<?php

class Persona
{
    // Atributos privados
    private $nombre;
    private $apellido;
    private $edad;
    private $correo;

    // Constructor
    public function __construct($nombre, $apellido, $edad, $correo)
    {
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setEdad($edad);
        $this->setCorreo($correo);
    }

    // Getters
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    // Setters
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }


    public function saludar()
    {
        return "Hola, Mi nombre es: " . $this->getNombre() . " " . $this->getApellido() . "<br>"
            . "Mi Edad es: " . $this->getEdad() . "<br>"
            . "Mi Correo es: " . $this->getCorreo() . "<br>";
    }
}

?>