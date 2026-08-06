<?php

require_once '../clase/persona.php';
require_once "../clase/estudiante.php";
require_once '../clase/objeto.php';
require_once '../clase/profesor.php';

$persona1 = new Persona("Mariana", "Martinez", "18", "charitmarianam@correo.com");

$persona2 = new Persona("Amparo", "Chaparro", "28", "amparo@correo.com");

$Estudiante1 = new Estudiante("Miguel","Ramirez","21","pepito@correo.com","ADSO",6);

$objeto = new objeto("LG","43 pulgadas","1 Año","2.754.200");

$profesor1 = new profesor("Programación","3000000","5 años","7:00 AM - 12:00 PM");


echo $persona1->saludar();
echo "<br><br>";

echo $persona2->saludar();
echo "<br><br>";

echo $objeto->saludar();
echo "<br><br>";

echo $Estudiante1->saludar();
echo "<br><br>";

echo $profesor1->saludar();
echo "<br><br>";

?>