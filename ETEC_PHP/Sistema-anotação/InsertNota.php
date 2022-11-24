<?php

require_once 'vendor/autoload.php';

$insert = new \App\Model\Notas();
$notas = new \App\Model\NotaData();

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
$data = date("d/m/Y H:i");
$notas->setDesc($_POST['desc']);
$notas->setData($data);


if($insert->Create($notas)):
     echo "Registrada com sucesso!";
endif;