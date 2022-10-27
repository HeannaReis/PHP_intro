<?php
require_once "felino.php";

class Gato extends Felino {
    private $raca;
    public function __construct($raca, $cor) {
        $this->setRaca($raca);
        $this->setCor($cor);
        echo "Criando Gato...";
    }
    public function setRaca($raca) {
        $this->raca = $raca;
    }
    public function getRaca() {
        return $this->raca;
    }
    public function miar() {
        echo "<br>Miau!";
    }
    public function brincar() {
        echo "<br>Grrr!";
    }
    public function mostraDados() {
        echo 'Raça: ' . $this->getRaca() . '<br>Cor: ' . $this->getCor() . '<br>Peso: ' . $this->getPeso();
    }
}
