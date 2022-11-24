<?php

require_once 'vendor/autoload.php';

$id = @$_GET['excluir'];

$cnote = new \App\Model\Notas();
$nota = new \App\Model\NotaData();
$nota->setId($id);
if($cnote->Delete($nota)):
     header('Location: http://localhost');
else:
     echo "Erro ao deletar o maldito";
endif;
