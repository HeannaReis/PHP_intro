<?php

require 'iAnimal.php';

class Animal implements IAnimal {
     private $animal, $som, $tipo, $cores, $peso;

     function __construct($animal, $som, $tipo, $cores, $peso) {
          $this->setAnimal($animal);
          $this->setSom($som);
          $this->setTipo($tipo);
          $this->setCores($cores);
          $this->setPeso($peso);
     }
     
     public function setAnimal ($animal) {
          $this->animal = $animal;
     }
     public function getAnimal () {
          return $this->animal;
     }
     public function setSom ($som) {
          $this->som = $som;
     }
     public function getSom () {
          return $this->som;
     }
     public function setTipo ($tipo) {
          $this->tipo = $tipo;
     }
     public function getTipo () {
          return $this->tipo;
     }
     public function setCores ($cores) {
          $this->cores = $cores;
     }
     public function getCores () {
          return $this->cores;
     }
     public function setPeso ($peso) {
          $this->peso = $peso;
     }
     public function getPeso () {
          return $this->peso;
     }
     public function mostraInfo () {
          echo "<hr />
          Nome: ".$this->getAnimal()."<br />
          Som Emitido: ".$this->getSom()."<br />
          Tipo: ".$this->getTipo()."<br />
          Cores: ".$this->getCores()."<br />
          Peso: ".$this->getPeso()."<hr /><br />
          ";
     }
}