<?php
session_start();
if(!empty($_SESSION['mensagem'])){
    echo $_SESSION['mensagem'];
    unset($_SESSION['mensagem']);
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto calculadora</title>
</head>
<body>
    <h1>Projeto Calculadora</h1>
    <form method="POST" action="calc.php    ">
        X  <input type="text" name="v1" >
        Y  <input type="text" name="v2" >
        <input type="submit" value="Submit">
    </form>

</body>
