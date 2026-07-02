<?php
include '../clase/persona.php';


$persona1 = new Persona("Mariana", "Martinez", "18", "charitmarianam@correo.com");

$persona2 = new Persona("amparo", "chaparro", "28", "amparo@correo.com");

echo $persona1->saludar();
echo "<br>"; 

echo $persona2->saludar();
?>