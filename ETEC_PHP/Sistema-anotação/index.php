<?php
require_once ('vendor/autoload.php');
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>AnotaSys
          <?php
          if(isset($_SESSION['login'])):
               echo ' - ' . $_SESSION['login'][1];
          endif;
          ?>
     </title>
     <link rel="stylesheet" href="Components/style.css">
     <link rel="stylesheet" href="Components/material_icons/material_icons.css">
</head>
<body>
     <div class="container">
     <?php
     if(isset($_SESSION['login'])):
          $pages = new \App\Model\Pages('Anotacoes');
          include($pages->IncludePage());
     else:
          $pages = new \App\Model\Pages(@$_GET['page']);
          include($pages->IncludePage());
     endif;
     ?>
     </div>
     <script src="Components/jquery-3.6.1.min.js"></script>
     <script src="Components/support.js" ></script>
</body>
</html>