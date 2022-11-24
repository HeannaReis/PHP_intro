<?php

require_once 'vendor/autoload.php';

$create = new \App\Model\LoginData();
$upload = new \App\Model\Login();

$create->setUser($_POST['username']);
$create->setLogin($_POST['login']);
if($_POST['pass'] == $_POST['repass']):
     $create->setPass(md5($_POST['pass']));
else:
     header('Location: http://localhost?page=Create&name='.$create->getUser().'&user='.$create->getLogin().'&msg=Senhas divergente');
endif;
$result = $upload->Create($create);
if ($result != true):
     header('Location: http://localhost?page=Create&msg=Erro ao Cadastrar Usuario');
else:
     header('Location: http://localhost?page=&login='.$create->getLogin().'&msg=Por favor, faça login');
endif;