<?php
if(isset($_SESSION) == 'logado'){}

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
        $_SESSION['mensagem'] = "Usuário, " .  " $login" . " Logado com Sucesso !!";
        header ("location: Postagem/podePostar.php?");
           
        }
        else
        {
            $_SESSION['mensagem'] = "Verifique Login e Tente de novo !!";
            header ("Location: login.php?falhou=true");
            return;
        }       
    }
    else
    {
        header ("location: login.php?falhou=true");
    }  
}  
validaLogin($_POST['login'], $_POST['pass']);

