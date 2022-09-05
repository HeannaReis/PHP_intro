<?php

	class Calculadora {

		private $total;
		private $n1;
		private $n2;

		function __construct(){
			$this->total = 0;
			$this->n1 	 = 0;
			$this->n2 	 = 0;
		}

		//Getters and Setters
		public function setNum1($pNum1) {

			$this->n1 = $pNum1;
		}

		public function setNum2($pNum2){
			$this->n2 = $pNum2;
		}

		public function getTotal() {
			return $this->total;
		}



		//Operações

		public function somar(){
			$this->total = $this->n1 + $this->n2;

		}

		public function subtrair(){
			$this->total = $this->n1 - $this->n2;

		}

		public function multiplicar(){
			$this->total = $this->n1 * $this->n2;

		}

		public function dividir(){
			$this->total = $this->n1 / $this->n2;

		}

	}

?>