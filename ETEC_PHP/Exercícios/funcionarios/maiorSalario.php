<?php
require_once './funcionarios.php';

<<<<<<< HEAD
$maior = 0; 
=======
$maior = 0;
>>>>>>> 53ea41c25824efd370e3995455e3be3a3b5f85ab

foreach ($funcionarios as $k => $value)
{   
    if($value['salario'] > $maior)
    $maior = $value['salario'];
<<<<<<< HEAD

}
echo ("<br>" . " O Maior salário é: " . $maior . " !!! ");
=======
    echo ("<br>" . $value['salario']);
}
echo "<br>";
echo ("<br>" . " O Maior salário é: " . $maior . " !!! ");


>>>>>>> 53ea41c25824efd370e3995455e3be3a3b5f85ab
