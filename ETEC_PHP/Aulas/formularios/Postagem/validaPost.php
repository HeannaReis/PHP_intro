<?php

      $titulo = $_POST['titulo'];   
      $conteudo = $_POST['conteudo'];
      $autor = $_POST['autor'];

try {

   if (empty($conteudo) || ($titulo) == ''){
      
      $_SESSION['mensagem'] = 'Preencha tudo !!!';
      header("Location: podePostar.php");
      return;
   }

   if(isset($conteudo))
   {  
      function mostraTitulo($titulo)
      {
         return $titulo;
      }

      function mostraConteudo($conteudo)
      {
         return $conteudo;
      }

      function mostraAutor($autor)
      {
         return $autor;
      }
   }

   
} catch (Exception $e) {

   echo "Preencha todos os campos !";
   header("location: ../login.php");
   return;
}
