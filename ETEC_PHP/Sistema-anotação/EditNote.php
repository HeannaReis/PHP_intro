<?php

require_once 'vendor/autoload.php';

$desc = $_POST['desc'];
$id = $_POST['id'];
$nota = new \App\Model\NotaData();
$nota->setId($id);
$nota->setDesc($desc);
$update = new \App\Model\Notas();
return $update->Update($nota);