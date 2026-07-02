<?php
require_once '../clase/persona.php';
require_once "../clase/estudiante.php";

$persona1 = new Persona("Mariana", "Martinez", "18", "charitmarianam@correo.com");

$persona2 = new Persona("amparo", "chaparro", "28", "amparo@correo.com");

$Estudiante1 = new Estudiante("Miguel", "Ramirez", "21", "pepito@correo.com");

echo $persona1->saludar();
echo "<br>"; 

echo $persona2->saludar();

echo "<br>"; 

require_once '../clase/objeto.php';

$objeto = new objeto("LG", "43 pulgadas", "1 Año", "2.754.200");

echo $objeto->saludar();
echo "<br>"; 

echo $Estudiante1->saludar();
echo "<br>"; 


?>