<?php

try {
    if(!empty($_GET["parametro1"]))
    {
        if(strlen($_GET["parametro1"]) < 3)
            throw new Exception("Parametro1 menor que 3 caracteres");

    }   else
    {
        throw new Exception("Não declarado parametro1 ");
    }

    if(!empty($_GET["parametro2"]))  
    {
        if(!is_numeric($_GET["parametro2"]))
        throw new Exception("Parametro2 deve ser numérico");
    }else 
    {
        throw new Exception("Não declarado parametro2 ");
    }
    $nome = $_GET["parametro1"];

    $idade = $_GET["parametro2"];

    $frase = "Olá, Meu nome é " . $nome . "<br>" . "<br>";

    $frase .= "Tenho " . $idade . " Anos";

    echo $frase;

} catch (Exception $e) {
    echo $e->getMessage(); 
}