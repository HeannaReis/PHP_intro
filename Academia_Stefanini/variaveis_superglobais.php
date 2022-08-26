<?php

$nome = $_GET["parametro1"];

$idade = $_GET["parametro2"];

$frase = "Olá, Meu nome é " . $nome;
$frase .= " e tenho " . $idade . " Anos";

echo $frase;