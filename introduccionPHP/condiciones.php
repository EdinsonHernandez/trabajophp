<?php

#condiciones
$edadUsuario = 50;

if ( $edadUsuario < 18 ) {
   echo "Lo sentimos, el contenido de esta web no es accesible a menores de edad";
} else {
   if ( $edadUsuario < 65 ) {
      echo 'bienvenido a la web adultos no jubilados';
   } else {
      echo 'Lo sentimos, el contenido de esta web está restringido a jubilados';
   }
}

echo "<br><br>";

# switches
$dia = 2;
 
switch ($dia) {
    case 1:
        echo 'Domingo';
    break;
 
    case 2:
        echo 'Lunes';
    break;
 
    case 3:
        echo 'Martes';
    break;
 
    case 4:
        echo 'Miércoles';
    break;
 
    case 5:
        echo 'Jueves';
    break;
 
    case 6:
        echo 'Viernes';
    break;
 
    case 7:
        echo 'Sábado';
    break;
 
    default:
        echo 'Error';
    break;
}

echo "<br><br>";
# ciclo while

 $id=5; 
    while($id <=30){ 
         echo $id; 
         echo "<br>";
         $id+=2; 
    }

echo "<br><br>";

# ciclo Do while

$n = 1;

do {

	echo $n;
	$n++;
}

while ($n <=5); 

echo "<br><br>";

# ciclo for

echo "la lista de números elegidos son:";
    for($i=4; $i<=26; $i=$i+2){                
        echo "<br>";
        echo $i++;
    }
	

?>