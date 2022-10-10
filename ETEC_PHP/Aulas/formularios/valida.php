<?php
session_start();

function validaLogin (){
    $loginCorreto = "admin";
    $senhaCorreta = "1234";

    $login = $_POST ['login'];
    $senha = $_POST ['pass'];
  
    if ( $login == $loginCorreto) 
    {
        if ($senha == $senhaCorreta)
        {
        $_SESSION["logado"] = $login; 
        header ("Location: Postagem/podePostar.php?logado=true");
        $_SESSION['mensagem'] = "Usuário, " .  " $login" . " Logado com Sucesso !!";
        return;        
        }
        else
        {
            header ("Location: login.php");
            $_SESSION['mensagem'] = "Verifique Login e Tente de novo !!";
            return;
        }       
    }
    else
    {
        header ("Location: login.php");
        $_SESSION['mensagem'] = "Verifique Login e Tente de novo !!";
        return;
    }  
}  
validaLogin($_POST['login'], $_POST['pass']);

