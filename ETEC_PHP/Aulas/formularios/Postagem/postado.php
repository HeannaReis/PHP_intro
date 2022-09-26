<link rel="stylesheet" href="../assets/css/style.css">

<?php

include_once "validaPost.php";
include_once "banner.php";


if (!isset($_POST['titulo'])){
    header("Location: podePostar.php");
}

$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];
$autor = $_POST['autor'];
?>
<form class="postado"> 
<?php
echo "Titulo :" . "<br>" . mostraTitulo($titulo) . "<br><br>";
echo " Conteudo :" . "<br>" . mostraConteudo($conteudo) . "<br><br>";
echo "Autor :  " . "<br>" . mostraAutor($autor) . "<br><br>";
?>
</form>  


