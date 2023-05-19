<?php

$tiempo = $_POST['tiempo'];
$velocidad = $_POST['velocidad'];

$d1 = new Distancia(intval($tiempo), intval($velocidad));
echo ("La distancia es de: ".$d1->Calculo());

?>