<?php

class profesor
{
    protected $materia;
    protected $salario;
    protected $experiencia;
    protected $horario;

    public function __construct($materia, $salario, $experiencia, $horario)
    {
        $this->materia = $materia;
        $this->salario = $salario;
        $this->experiencia = $experiencia;
        $this->horario = $horario;
    }

    public function saludar()
    {
        return "La materia que enseño es: " . $this->materia . "<br>" . "Mi salario es: " . $this->salario . "<br>" . "Tengo experiencia de: " . $this->experiencia . "<br>" . "Mi horario es: " . $this->horario;
    } 
}

?>