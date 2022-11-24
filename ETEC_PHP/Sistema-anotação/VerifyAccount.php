<?php

use Illuminate\Session\Middleware\StartSession;

require_once('vendor/autoload.php');

session_start();

$login = new \App\Model\LoginData();
$verifyLogin = new \App\Model\Login();
$login->setPass(md5($_POST['pass']));
$login->setLogin($_POST['login']);
if($verifyLogin->Read($login) != false):
     foreach($verifyLogin->Read($login) as $lougin){
          // echo $lougin['name_user'].'<br />'. $lougin['login'].'<br />'.$lougin['pass'];
          $_SESSION['login'] = array($lougin['user_id'], $lougin['name_user'], $lougin['login']);
          header('Location: http://localhost');
     }
else:
     header('Location: http://localhost?page=Create&user='.$login->getLogin());
endif;