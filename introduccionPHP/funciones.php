<?php


#funciones sin parametro

function saludo(){


    echo "Hola<br>";


}

saludo();

#funciones con parametro

function despedida($adios){


    echo $adios."<br>";


}

despedida("Adios");

#funciones con retorno

function retorno($retornar){


    return $retornar;

    
}

echo retorno("Devolver");
?>
