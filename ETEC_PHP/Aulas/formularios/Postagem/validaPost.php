<?php
session_start();

      $titulo = $_POST['titulo'];   
      $conteudo = $_POST['conteudo'];
      $autor = $_POST['autor'];

try {   
   if(empty($conteudo) || ($titulo) == ''){
      $_SESSION['mensagem'] = 'Campos Título e Conteúdo Obrigatórios !!!';
      header("Location: podePostar.php");
      return;
    }
    elseif(isset($conteudo) && ($titulo))
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
    elseif(($titulo) || ($conteudo) == ''){
      $_SESSION['mensagem'] = 'Campo Título e Conteúdo Obrigatórios !!!';
      header("Location: podePostar.php");
      return;
    }
   
} catch (Exception $e) {

   echo "Verifique Login e tente novamente !";
   header("location: ../login.php");
   return;
}
