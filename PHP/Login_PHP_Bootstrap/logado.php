<?php
session_start();

if (!isset($_SESSION["usuario_logado"]))

    header("Location: cadastro.php");

?>

<h1> Olá Mundo </h1>