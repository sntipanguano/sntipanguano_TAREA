<?php
	class rectangulo extends figura implements formulas{
		private $lado1;   //Largo del rectangulo
		private $lado2;   //Ancho del rectangulo
		private $areaR;       //Area del rectangulo
		private $perR;       //Perimetro del rectangulo
		private $tipo;    //Tipo de figura

		// CONSTRUCTOR
		function __construct($l1, $l2) {			
			$this->lado1 = $l1;
			$this->lado2 = $l2;
			$this->tipo = get_class($this);
	    }

		//Override
		public function GetArea() {
			return $this->areR;
		}

		//Override
		public function GetPerimetro() {
			return $this->perR;
		}

		//Override
		public function GetTipo() {
			return $this->tipo;
		}
		
		//Override
		public function area() {
			$this->areaR = $this->lado1 * $this->lado2;
		}
		
		//Override
		public function perimetro() {
			$this->perR = ($this->lado1 + $this->lado2) * 2;
		}		
	}
?>
