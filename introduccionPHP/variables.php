<?php

$numero = 35;

echo "Esto es una variable Numero: $numero<br>";
var_dump($numero);
 
echo "<br><br>";

$frase = "Hola como esta profesor Henry";

echo "Esta es una varible texto: $frase<br>";
var_dump($frase);

echo "<br><br>";

$boleana = false;

echo "Esta es una variable boleana: $boleana<br>";
var_dump($boleana);
echo "<br><br>";

$meses = array("enero","febrero","marzo","abril<br>");

echo "Esta es una variable arreglo: $meses[1]<br>";
var_dump($meses);
echo "<br><br>";

$carros = array("carro1"=>"Mazda","carro2"=>"Audi","carro3"=>"Hyundai");

echo "Esto es una variable arreglo con propiedades: $carros[carro2]<br>";
var_dump($carros);
echo "<br><br>";

$colores = (object)["color1"=>"Azul","color2"=>"Verde","color3"=>"Rojo<br>"];

echo "Esto es una variable objeto: $colores->color1<br>";
var_dump($colores); 
echo "<br><br>";

?>