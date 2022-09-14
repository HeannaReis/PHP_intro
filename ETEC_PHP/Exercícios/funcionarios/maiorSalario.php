<?php
require_once './funcionarios.php';


$maior = 0;


foreach ($funcionarios as $k => $value)
{   
    if($value['salario'] > $maior)
    $maior = $value['salario'];

}
echo ("<br>" . " O Maior salário é: " . $maior . " !!! ");

    echo ("<br>" . $value['salario']);
echo "<br>";
echo ("<br>" . " O Maior salário é: " . $maior . " !!! ");

