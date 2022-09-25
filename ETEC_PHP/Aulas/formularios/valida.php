<?php
    include_once "login.php";

    function validaLogin (){
    $loginCorreto = "admin";
    $senhaCorreta = "1234";

    $login = $_POST ['login'];
    $senha = $_POST ['pass'];
       
    
    if ($loginCorreto == $login) 
    {
        if ($senhaCorreta == $senha)
        {
        header ("Location: ./Postagem/podePostar.php");
        }
        else
        {
            header ("Location: login.php?falhou=true");
        }       
    }
    else
    {
        header ("Location: login.php?falhou=true");
    }  

}  

validaLogin($_POST['login'], $_POST['pass']);

