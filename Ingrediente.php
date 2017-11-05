<?php
	
	class Ingrediente
	{

		private $nombre, $costo, $porcion;

		function __construct($nombre, $costo, $porcion){
			$this->nombre=$nombre;
			$this->costo=$costo;
			$this->porcion=$porcion;
		}

		public function setNombre($nombre)
		{
			$this->nombre=$nombre;
		}

		public function setCosto($costo){
			$this->costo=$costo;
		}

		public function setPorcion($porcion){
			$this->porcion=$porcion;
		}

		public function getNombre()
		{
			return $this->nombre;
		}

		public function getCosto()
		{

			return $this->costo;
		}

		public function getPorcion()
		{
			return $this->porcion;
		}

		public function __toString(){
			return $this->nombre . " " . $this->costo . " " .  $this->porcion;
		}

	}

	$ing1=new Ingrediente("Jamon",10,100);
	echo $ing1

?>
