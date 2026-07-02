<?php
class Objeto
{
    public $televisor;
    public $modelo;
    public $garantia;
    public $valor;

    public function __construct($televisor, $modelo, $garantia, $valor)
    {
        $this->televisor = $televisor;
        $this->modelo = $modelo;
        $this->garantia = $garantia;
        $this->valor = $valor;
    }

    public function saludar()
    {
        return "Hola, Mi Televisor es: " . $this->televisor . " " . $this->modelo . "<br>" ."La garantia es de: " . $this->garantia . "<br>" ."El valor es: " . $this->valor . "<br>";
    }
}
?>