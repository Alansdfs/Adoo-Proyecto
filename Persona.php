<?php
	
	class Persona
	{

		private $nombre, $a_paterno, $a_materno, $fecha_nacimiento;

		function __construct($nombre, $a_paterno, $a_materno, $fecha_nacimiento){
			$this->nombre=$nombre;
			$this->a_paterno=$a_paterno;
			$this->a_materno=$a_materno;
			$this->fecha_nacimiento=$fecha_nacimiento;
		}

		public function setNombre($nombre)
		{
			$this->nombre=$nombre;
		}

		//Demás Setters...

		public function getNombre()
		{
			return $this->nombre;
		}

		public function getA_paterno()
		{

			return $this->a_paterno;
		}

		public function getA_materno()
		{
			return $this->a_materno;
		}

		public function getFecha_nacimiento()
		{
			return $this->fecha_nacimiento;
		}

		public function __toString(){
			return $this->nombre . " " . $this->a_paterno . " " .  $this->a_materno . " " . $this->fecha_nacimiento;
		}

	}
	

	#$alguien = new Persona("Irvo","Delgado", "Silva", "7 Julio");

	#$alguien->setNombre("Irv");
	#echo $alguien->getNombre() . "<br>";
	#echo $alguien->getA_paterno() . "<br>";
	#echo $alguien->getA_materno() . "<br>";
	//echo $alguien	


 
?>
