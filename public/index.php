<?php

require_once "../clase/persona.php";

$variable = new Persona();
$variable2 = new Persona();

$variable->nombre = "Charit";
$variable->edad = 18;
$variable->correo = "charitmarianam@gmail.com";
$variable->apellido = "Martinez";


$variable2->nombre = "Amparo";
$variable2->edad = 28;
$variable2->correo = "amparochaparrom@gmail.com";
$variable2->apellido = "Mora";




echo $variable->saludar();

echo "<br><br>";

echo $variable2->saludar();

?>