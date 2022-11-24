<?php

require_once 'vendor/autoload.php';

$notas = new \App\Model\Notas();

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
$data = date("d/m/Y");

if($notas->Read() != false):
     foreach($notas->Read() as $notes){
          $dadaC = explode(" ", $notes['data']);
          if($dadaC[0] == $data):
               echo '
               <tr>
                    <td>'.$notes['descricao'].'</td>
                    <th>'.$notes['data'].'</th>
                    <td><a href="?nota='.$notes['id'].'" class="material-icons">edit</a></td>
                    <td><a href="DeleteNote.php?excluir='.$notes['id'].'" class="material-icons">delete</a></td>
               </tr>
               ';
          endif;
     }
else:
     echo '
     <tr>
          <td colspan="2">Sem Anotações Hoje</td>
     <tr>
     ';
endif;