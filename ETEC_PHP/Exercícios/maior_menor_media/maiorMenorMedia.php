<?php

$numeros = [53, 82, 80, 66, 41, 64, 28, 99, 77, 50];
	
foreach ($numeros as $value)
echo "<br>" .$value;
echo "<br>";
echo "<br>" . " O Maior número é: " . max($numeros) . " !!! ";
echo "<br>" . " O Menor número é: " . min($numeros) . " !!! ";
echo "<br>" . "A Média dos valores é: " . array_sum($numeros) / count($numeros) . " !!! ";

//Maior: 99
//Menor: 28
//Média: 64