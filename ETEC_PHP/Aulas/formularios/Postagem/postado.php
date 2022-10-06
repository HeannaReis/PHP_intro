<link rel="stylesheet" href="../assets/css/style.css">
<?php

include_once "validaPost.php";
include_once "banner.php";

?>
<form class="postado"> 
<?php
echo "Titulo :" . "<br>" . mostraTitulo($titulo) . "<br><br>";
echo " Conteudo :" . "<br>" . mostraConteudo($conteudo) . "<br><br>";
echo "Autor :  " . "<br>" . mostraAutor($autor) . "<br><br>";
?>
</form>  



