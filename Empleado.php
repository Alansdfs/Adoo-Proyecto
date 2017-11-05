<?php
	include_once 'Persona.php';
	
	#echo "<br>Empleado.<br>";
	class Empleado extends Persona
	{

		private $tipo_empleado, $identificador, $password;

		function __construct($nombre, $a_paterno, $a_materno, $fecha_nacimiento,$tipo_empleado, $identificador, $password){
			parent::__construct($nombre,$a_paterno,$a_materno, $fecha_nacimiento);
			$this->tipo_empleado=$tipo_empleado;
			$this->identificador=$identificador;
			$this->password=$password;
		}

		public function __toString(){
			return parent::__toString(). " " . $this->tipo_empleado . " " . $this->identificador . " " .  $this->password ;
		}

		//Setters y getters...

	}
?>
