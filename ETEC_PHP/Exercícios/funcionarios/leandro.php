[21:06] LEANDRO FERNANDES PEREIRA DA SILVA
<?php



$funcionarios = [
['nome' => 'João da Silva', 'genero' => 'M', 'area' => 'engenharia', 'salario' => 6000],//0
['nome' => 'Maria da Silva', 'genero' => 'F', 'area' => 'marketing', 'salario' => 3000],//1
['nome' => 'Beltrano da Silva', 'genero' => 'M', 'area' => 'contabilidade', 'salario' => 4000],//2
['nome' => 'Ciclano Pereira', 'genero' => 'M', 'area' => 'engenharia', 'salario' => 4000],//3
['nome' => 'Fulana Oliveira', 'genero' => 'F', 'area' => 'contabilidade', 'salario' => 2000],//4
['nome' => 'Jão Silveira', 'genero' => 'M', 'area' => 'marketing', 'salario' => 4000],//5
['nome' => 'Cirilo Ferreira', 'genero' => 'M', 'area' => 'contabilidade', 'salario' => 3000],//6
['nome' => 'Zé das Couve', 'genero' => 'M', 'area' => 'engenharia', 'salario' => 5000],//7
['nome' => 'Pedro Pedrada', 'genero' => 'M', 'area' => 'contabilidade', 'salario' => 2000],//8
['nome' => 'Paulo Paulada', 'genero' => 'M', 'area' => 'marketing', 'salario' => 2000],//9
['nome' => 'Creuza Reis', 'genero' => 'F', 'area' => 'financeiro', 'salario' => 1500],//10
['nome' => 'Yarley Ground', 'genero' => 'M', 'area' => 'financeiro', 'salario' => 3000],//11
['nome' => 'Billy Bill', 'genero' => 'M', 'area' => 'marketing', 'salario' => 2000],//12
['nome' => 'Brian Brioche', 'genero' => 'M', 'area' => 'engenharia', 'salario' => 6500],//13
['nome' => 'Mary Mariana', 'genero' => 'F', 'area' => 'financeiro', 'salario' => 2000],//14
];


$ref=$funcionarios[0]["salario"];
$eng=$funcionarios[0]["salario"] + +$funcionarios[3]["salario"]+$funcionarios[7]["salario"] + $funcionarios[13]["salario"];
$mark=$funcionarios[1]["salario"] + $funcionarios[5]["salario"] + $funcionarios[9]["salario"]+ $funcionarios[12]["salario"];
$cont=$funcionarios[2]["salario"] + $funcionarios[4]["salario"] + $funcionarios[6]["salario"]+ $funcionarios[8]["salario"];
$fin=$funcionarios[10]["salario"] + $funcionarios[11]["salario"] + $funcionarios[14]["salario"];
$setorMa =max([$eng,$mark,$cont,$fin]);
$setorMe =min([$eng,$mark,$cont,$fin]);
//$maior=Maiorvalor($ref,$eng,$mark,$cont,$fin)

foreach ($funcionarios as $id) {

if ($id["salario"] >$ref){$ref =$id["salario"];
}

}

echo "maior valor:".$ref . "</br>";

echo $eng . "</br>";
echo $mark . "</br>";
echo $cont . "</br>";
echo $fin . "</br>";

if ($setorMa=$fin) {


echo "O menor é financeiro " .$setorMa . "</br>";
}

if ($setorMa=$eng) {

echo "O maior é engenharia " .$setorMa . "</br>";
}
?>

