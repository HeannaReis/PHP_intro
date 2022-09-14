<?php
include './function.php';

$x = $_POST['v1'];
$y = $_POST['v2'];

if ($x ==0 && $y == 0) 
{
    $_SESSION['mensagem'] = 'Todas as operações retornam 0 !!!';
    header("Location: pagCalc.php");
    return;
}   
else if (empty($x) || ($y) == '') 
{
    $_SESSION['mensagem'] = 'Preencha todos os campos corretamente !!!';
    header("Location: pagCalc.php");
    return;
}
else if (!is_numeric($x) || !is_numeric ($y)) 
{
    $_SESSION['mensagem'] = 'Preencha apenas com números !!!';
    header("Location: pagCalc.php");
    return;
}

echo "$x + $y = " .sum($x, $y) . "<br>";
echo "$x - $y = " .sub($x, $y) . "<br>";
echo "$x / $y = " .div($x, $y) . "<br>";
echo "$x * $y = " .mult($x, $y). "<br>";

?>