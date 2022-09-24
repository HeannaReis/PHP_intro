<?php
session_start();

try{

    $usuario_certo = "admin";
    $senha_certa = "123";

    $usuario_digitado = $_POST["usuario"];
    $senha_digitada = $_POST["senha"];


    if ($usuario_digitado == $usuario_certo)
        {
            if($senha_digitada == $senha_certa)
            {                
                $_SESSION["usuario_logado"] = $usuario_digitado;
                header ("Location: cadastro.php");
            }
            else 
            {
                header ("Lo cation: login.php?falhou=true");
            }    
        }   
        else
        {
            header ("Location: login.php?falhou=true");
        }    

}catch (Exception $e)
{
    echo $e-> getMessage ();
}

