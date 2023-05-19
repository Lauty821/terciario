<?php

$pal1 = $_POST["pal1"];
$pal2 = $_POST["pal2"];

/*
Converti el string en un array con el str_split.
*/
$pal1 = str_split($pal1);
$pal2 = str_split($pal2);

/*
Con el if verifico que el tamaño de la palabra sea de 5 caracteres.
*/
if (count($pal1)==5 and count($pal2)==5) 
{
    $rep = 0;
    //Recorres el arreglo 1 y verifico si hay una letra repetida en el arreglo 2.
    foreach ($pal1 as $valor)
    {
        foreach ($pal2 as $valor2)
        {
            if ($valor2 == $valor)
            {
                $rep++;
            }
        }
    }
    echo 'Repeditas:' . $rep; 
} 
else 
{ 
    //Si una una no cumple con el tamaña 5 se reenvia el reingreso de la palabra.
    echo 'El tamaño es mayor a 5 caracteres';

    header("Location:ejercicio2.html");
    die();
}

?>