<?php
	class cuadrado extends figura implements formulas {
		private $lado;   //Lados del cuadrado
		private $areaC;      //Area del cuadrado
		private $perC;     //Perimetro del cuadrado
		private $tipo;  //Tipo de figura

		// CONSTRUCTOR
		function __construct($l1) {		
			$this->lado = $l1;
			$this->tipo = get_class($this);
	    }

		//Override
		public function GetArea() {
			return $this->areaC;
		}

		//Override
		public function GetPerimetro() {
			return $this->perC;
		}

		//Override
		public function GetTipo() {			
			return $this->tipo;
		}
		
		//Override
		public function area() {
			$this->areaC = $this->lado * $this->lado;
		}
		
		//Override
		public function perimetro() {
			$this->perC = $this->lado * 4;
		}
	}
?>
