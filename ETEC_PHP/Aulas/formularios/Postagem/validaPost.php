<?php
session_start();

      $titulo = $_POST['titulo'];   
      $conteudo = $_POST['conteudo'];
      $autor = $_POST['autor'];

try {

   if(isset($titulo) && ($conteudo))
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
    elseif(empty($titulo) || ($conteudo) == ''){
      $_SESSION['mensagem'] = 'Campo Título e Conteúdo Obrigatórios !!!';
      header("Location: podePostar.php");
      return;
    }
   
} catch (Exception $e) {

   echo "Verifique Login e tente novamente !";
   header("location: ../login.php");
   return;
}
