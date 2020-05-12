<?php



$alumno1 = (object)["nombre"=>"Edison Hernandez", "carrera"=>"ingeneria de sistemas", "universidad"=>"unitecnar"];
$alumno2 = (object)["nombre"=>"Juan Perez", "carrera"=>"ingeneria de sistemas", "universidad"=>"unitecnar"];
$alumno3 = (object)["nombre"=>"Jhonnatan Ponce", "carrera"=>"ingeneria de sistemas", "universidad"=>"unitecnar"];
$alumno4 = (object)["nombre"=>"Jhonn Diaz", "carrera"=>"ingeneria de sistemas", "universidad"=>"unitecnar"];


function mostrar($alumno){

	echo "<p>El alumno $alumno->nombre estudia $alumno->carrera en la universidad $alumno->universidad</P>";
}

mostrar($alumno1);
mostrar($alumno2);
mostrar($alumno3);
mostrar($alumno4);



?>
