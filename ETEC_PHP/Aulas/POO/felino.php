<?php
class Felino {
    private $cor;
    private $peso;
    public function setCor($cor) {
        $this->cor = $cor;
    }
    public function getCor() {
        return $this->cor;
    }
    public function setPeso($peso) {
        $this->peso = $peso;
    }
    public function getPeso() {
        return $this->peso;
    }
}