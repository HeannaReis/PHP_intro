<?php
session_start();
  if(!empty($_SESSION['mensagem'])){
     echo $_SESSION['mensagem'];
     unset($_SESSION['mensagem']);
     session_destroy();
    }
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">

    <title>Área de Postagem</title>
</head>
<body>
        <div class="boxPost text-center"> 
        <form action="postado.php" method="post">
            <h3>Novo Post</h3>
            <label for="titulo">Título:</label><br>
            <input   type="text" name="titulo"  id="titulo" ><br><br>
            <label for="conteudo">Conteúdo:</label><br>
            <textarea type="textarea" name="conteudo" rows="4" cols="60" id="conteudo" ></textarea><br><br>
            <label for="autor">Autor:</label><br>
            <input type="text" name="autor" id="autor"><br><br>
            <input type="submit" name="postar" value="Postar">
        </form>
        </div>
    </body>
</html>