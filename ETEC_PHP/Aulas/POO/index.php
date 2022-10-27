<?php
require_once "gato.php";
require_once "leao.php";

$gatoA = new Gato("Persa", "Branco");
$gatoB = new Gato("Siamês", "Marrom");
$gatoA->setPeso(1);
$gatoB->setPeso(2);
echo "<br><br>GATO A:<br><br>";
$gatoA->mostraDados();
$gatoA->miar();
echo "<br><br>GATO B:<br><br>";
$gatoB->mostraDados();
$gatoB->miar();

echo "<br><br>LEÃO:<br><br>";
$leao = new Leao();
$leao->setPeso(190);
$leao->setCor("Amarelo");
echo 'Cor: ' . $leao->getCor() . '<br>Peso: ' . $leao->getPeso();