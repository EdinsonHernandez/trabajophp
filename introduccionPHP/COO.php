<?php



class alumno{

	
	public $nombre;
	public $carrera;
	public $universidade;


	public function mostrar(){


		echo"<p>El alumno $this->nombre estudia $this->carrera en la universidad $this->universidad</P>";


	}
	
}


$a = new alumno();
$a -> nombre = "Edison Hernandez";
$a -> carrera = "ingenieria de sistemas";
$a -> universidad = "unitecnar";
$a -> mostrar();

$b = new alumno();
$b -> nombre = "Juan Perez";
$b -> carrera = "ingenieria de sistemas";
$b -> universidad = "unitecnar";
$b -> mostrar();

$c = new alumno();
$c -> nombre = "Jhonnatan Ponce";
$c -> carrera = "ingenieria de sistemas";
$c -> universidad = "unitecnar";
$c -> mostrar();


?>