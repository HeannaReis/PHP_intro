<?php
interface IAnimal
{

    //Funções que precisam ser implementadas na classe que implementar os animais
    public function setAnimal ($animal);
    public function getAnimal ();
    public function setTipo ($tipo);
    public function getTipo ();
    public function setSom ($som);
    public function getSom ();
    public function setCores ($cores);
    public function getCores ();
    public function setPeso ($peso);
    public function getPeso ();
    public function mostraInfo ();
}